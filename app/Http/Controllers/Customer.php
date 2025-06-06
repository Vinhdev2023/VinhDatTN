<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class Customer extends Controller
{
    public function customer(){
        $books = Book::orderBy('created_at', 'desc')->paginate(12);
        $books->load('author');

        return view('customer.index', compact('books'));
    }

    public function account_setting(){
        return view('customer.account-setting');
    }

    public function category(){
        $books = Book::orderBy('created_at', 'desc')->paginate(12);

        return view('customer.category', compact('books'));
    }
    public function Checkout(){
        return view('customer.Checkout');
    }
    public function cart_page(){
        return view('customer.cart-page');
    }
    public function profile(){
        return view('customer.profile');
    }
    public function order_detail(){
        return view('customer.order-detail');
    }
    public function order_page(){
        return view('customer.order-page');
    }
    public function profile_edit(){
        return view('customer.profile-edit');
    }
}
