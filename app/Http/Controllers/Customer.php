<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Customer extends Controller
{
    public function customer(){
        // $books = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->paginate(12);
        // $books->load('author');

        $books = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->paginate(12);
        $books->load('author');

        // dd($books);

        $flag = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->count();

        return view('customer.index', compact('books','flag'));
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
            ->paginate(10);
        
        return view('customer.profile-edit', ['orders' => $orders]);
    }
}
