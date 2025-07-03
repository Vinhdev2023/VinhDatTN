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

        $orders = Order::where('status','PENDING')->orWhere('status','CONFIRMED')->count();

        $customers = Customer::count();

        $booksUnder50 = Book::where('quantity','<',50)->count();

        $orders_in_day = Order::whereRaw('DATE(created_at) = \''.date_format(now(), 'Y-m-d').'\' AND (status = \'PENDING\' OR status = \'CONFIRMED\')')->count();

        return view('admin.index', compact('path','orders','customers','booksUnder50', 'orders_in_day'));
    }
}
