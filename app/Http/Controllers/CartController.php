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
        
        $orderPending = Order::find(3);
        $bookTaken = $orderPending->orderDetails()->where('book_id', $book->id)->sum('quantity');
        dd($orderPending, $bookTaken);
    }
}
