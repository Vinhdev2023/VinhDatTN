<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        $path = 'admin.index';

        $orders = Order::where('status','PENDING')->count();

        $customers = Customer::count();

        $booksUnder50 = Book::where('quantity','<',50)->count();

        return view('admin.index', compact('path','orders','customers','booksUnder50'));
    }
}
