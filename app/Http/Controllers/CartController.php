<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    public function index() {
        if (session()->get('cart')) {
            $cart = session()->get('cart');
            foreach ($cart as $value) {
                $book = Book::findOrFail($value->id);

                $orderPendingorConfirmed = Order::where('status', 'PENDING')
                    ->orWhere('status', 'CONFIRMED')
                    ->get();
                $bookTaken = 0;
                foreach ($orderPendingorConfirmed as $order) {
                    $bookTaken += Order::find($order->id)->orderDetails()->where('book_id', $value->id)->sum('quantity');
                }

                $value->quantityInStock = $book->quantity - $bookTaken;
            }

            session()->put('cart', $cart);
            // dd(session()->get('cart'));
            return view('customer.cart-page');
        }

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
    }

    public function removeInCart(Book $book) {
        $cart = session()->get('cart');
        foreach ($cart as $key => $obj) {
            if ($obj->id == $book->id) {
                unset($cart[$key]);
                break;
            }
        }
        if ($cart == null || $cart == []){
            session()->forget('cart');
            session()->forget('cart_total');
            session()->save();
            return redirect()->back();
        }
        session()->put('cart', $cart);
        $total = 0;
        $cart = session()->get('cart');
        foreach ($cart as $obj) {
            $total += $obj->price * $obj->quantity;
        }
        session()->put('cart_total', $total);
        return redirect()->back();
    }

    public function updateCart(Request $request, Book $book){
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        $quantity = $request->quantity;

        $orderPendingorConfirmed = Order::where('status', 'PENDING')
            ->orWhere('status', 'CONFIRMED')
            ->get();
        
        $bookTaken = 0;
        foreach ($orderPendingorConfirmed as $order) {
            $bookTaken += Order::find($order->id)->orderDetails()->where('book_id', $book->id)->sum('quantity');
        }
        
        if ($book->quantity - $bookTaken >= $quantity && $quantity <= $book->quantity) {
            $cart = session()->get('cart');
            foreach ($cart as $obj) {
                if ($obj->id == $book->id) {
                    $obj->quantity = $quantity;
                }
            }
            session()->put('cart', $cart);

            $total = 0;
            $cart = session()->get('cart');
            foreach ($cart as $obj) {
                $total += $obj->price * $obj->quantity;
            }
            session()->put('cart_total', $total);
            return redirect()->back();
        }

        throw ValidationException::withMessages([
            0 => 'số lượng quá nhiều'
        ]);
    }
}
