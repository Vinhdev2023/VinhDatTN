<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookViewController extends Controller
{
    public function view(Book $book) {
        $book->load('author');
        $book->load('category');
        $book->load('publisher');
        
        $orderPendingorConfirmed = Order::where('status', 'PENDING')
            ->orWhere('status', 'CONFIRMED')
            ->get();
        
        $bookTaken = 0;
        foreach ($orderPendingorConfirmed as $order) {
            $bookTaken += Order::find($order->id)->orderDetails()->where('book_id', $book->id)->sum('quantity');
        }

        $book->quantityInStock = $book->quantity - $bookTaken;

        return view('customer.book-page', compact('book'));
    }
}
