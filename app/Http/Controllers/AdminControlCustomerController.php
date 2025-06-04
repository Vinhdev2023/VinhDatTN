<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminControlCustomerController extends Controller
{
    public function index() {
        $path = 'admin.customer.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $customers = Customer::orderBy('created_at', 'desc')->get();

        return view('admin.customer.index', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'customers'));
    }
}
