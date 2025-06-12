<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class Customer extends Controller
{
    public function customer(){
        $books = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->paginate(12);
        $books->load('author');

        return view('customer.index', compact('books'));
    }

    public function account_setting(){
        return view('customer.account-setting');
    }

    public function category(){
        $books = Book::orderBy('created_at', 'desc')
        ->where('quantity', '>', 0)
        ->paginate(12);
        
        $books->load('author');

        return view('customer.category', compact('books'));
    }
    public function Checkout(){
        return view('customer.Checkout');
    }

    public function profile(){
        return view('customer.profile');
    }
    
    public function profile_edit(){
        $orders = Order::where('customer_id',auth('customers')->user()->id)
            ->select('*')
            ->selectRaw('DATE_FORMAT(created_at, "%d/%m/%Y") AS created_at_date')
            ->selectRaw('DATE_FORMAT(created_at, "%H:%i:%s") AS created_at_time')
            ->get();
        
        return view('customer.profile-edit', ['orders' => $orders]);
    }
}
