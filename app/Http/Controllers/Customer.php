<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Order;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Customer extends Controller
{
    public function customer(){
        $books = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->where('books.quantity', '>', 0)
                    ->paginate(12);
        $books->load('author');

        $flag = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->where('books.quantity', '>', 0)->count();

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('customer.index', compact('books','flag', 'categories', 'authors', 'publishers'));
    }

    public function account_setting(){
        return view('customer.account-setting');
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
            ->orderByDesc('created_at')
            ->limit(10)->get();
        
        return view('customer.profile-edit', ['orders' => $orders]);
    }
}
