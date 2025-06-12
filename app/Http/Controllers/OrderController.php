<?php

namespace App\Http\Controllers;

use App\Enums\EnumsOrderStatus;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function buyNow(Book $book) {
        $orderPendingorConfirmed = Order::where('status', 'PENDING')
            ->orWhere('status', 'CONFIRMED')
            ->get();
        
        $bookTaken = 0;
        foreach ($orderPendingorConfirmed as $order) {
            $bookTaken += Order::find($order->id)->orderDetails()->where('book_id', $book->id)->sum('quantity');
        }

        if ($book->quantity - $bookTaken > 0) {
            $cart = session()->get('cart');

            $flag = 0;
            if (isset($cart)) {
                foreach ($cart as $obj) {
                    if ($obj->id == $book->id) {
                        if ($obj->quantity >= $book->quantity - $bookTaken) {
                            return redirect('/cart-page');
                        }
                        $flag = 1;
                    }
                }
            }
            
            if ($flag == 0) {
                $book->quantity = 1;
                $cart = $book;
                session()->push('cart', $cart);
            }else{
                return redirect('/cart-page');
            }

            $total = 0;
            $cart = session()->get('cart');
            foreach ($cart as $obj) {
                $total += $obj->price * $obj->quantity;
            }
            session()->put('cart_total', $total);

            return redirect('/cart-page');
        }

        return redirect()->back();
    }

    public function addOrder(Request $request) {
        $cart = session()->get('cart');
        foreach ($cart as $value) {
            $orderPendingorConfirmed = Order::where('status', 'PENDING')
                ->orWhere('status', 'CONFIRMED')
                ->get();
            
            $bookTaken = 0;
            foreach ($orderPendingorConfirmed as $order) {
                $bookTaken += Order::find($order->id)->orderDetails()->where('book_id', $value->id)->sum('quantity');
            }
            $book = Book::whereKey($value->id)->first();
            if ($book->quantity - $bookTaken - $value->quantity < 0) {
                session()->forget('cart');
                session()->forget('cart_total');
                session()->save();
                return redirect('/cart-page')->with('fail', 'Số lượng không còn hợp lệ');
            }
        }

        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        $cart = session()->get('cart');

        Customer::whereKey(auth('customers')->user()->id)->update($validated);

        $customer = Customer::whereKey(auth('customers')->user()->id)->first();

        $order = Order::create([
            'customer_id' => $customer->id,
            'customer_name' => $request->full_name,
            'customer_phone' => $request->phone,
            'ship_to_address' => $request->address,
            'total' => session()->get('cart_total'),
            'status' => EnumsOrderStatus::PENDING,
        ]);

        foreach ($cart as $value) {
            OrderDetail::create([
                'order_id' => $order->id,
                'book_id' => $value->id,
                'quantity' => $value->quantity,
                'price' => $value->price
            ]);
        }

        session()->forget('cart');
        session()->forget('cart_total');
        session()->save();

        return redirect('/order-page');
    }

    public function order_page(){
        $orders = Order::where('customer_id',auth('customers')->user()->id)
            ->select('*')
            ->selectRaw('DATE_FORMAT(created_at, "%d/%m/%Y") AS created_at_date')
            ->selectRaw('DATE_FORMAT(created_at, "%H:%i:%s") AS created_at_time')
            ->orderByRaw('CASE WHEN status = "PENDING" THEN 1 WHEN STATUS = "COMPLETED" THEN 2 ELSE 3 END, created_at DESC')
            ->get();

        return view('customer.order-page', ['orders' => $orders]);
    }

    public function order_detail(Order $order){
        $order_details = OrderDetail::where('order_id',$order->id)->get();
        $order_details->load('book');

        return view('customer.order-detail', compact('order','order_details'));
    }

    public function update_status($status, Order $order) {
        if ($order->status == 'PENDING') {
            $order->update(['status' => $status]);

            return redirect()->back();
        }

        return redirect()->back();
    }
}
