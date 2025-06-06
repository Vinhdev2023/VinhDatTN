<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookViewController extends Controller
{
    public function view(Book $book) {
        $book->load('author');

        return view('customer.book-page', compact('book'));
    }
}
