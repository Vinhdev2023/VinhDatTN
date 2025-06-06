<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('customer.cart-page');
    }

    public function addCart(Book $book) {
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
                            return redirect()->back();
                        }
                        $obj->quantity++;
                        $flag = 1;
                    }
                }
            }
            if ($flag == 0) {
                $book->quantity = 1;
                $cart = $book;
                session()->push('cart', $cart);
            }else{
                session()->put('cart', $cart);
            }
            $total = 0;
            $cart = session()->get('cart');
            foreach ($cart as $obj) {
                $total += $obj->price * $obj->quantity;
            }
            session()->put('cart_total', $total);
            return redirect()->back();
        }
        return redirect()->back();
        // $orderPending = Order::find(3);
        // $bookTaken = $orderPending->orderDetails()->where('book_id', $book->id)->sum('quantity');
        // dd( $bookTaken, session()->get('cart'), session()->get('cart_total'));
    }
}
