<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
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
            $book->quantity = 1;
            $cart = $book;
            session()->push('cart', $cart);

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
}
