<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index() {
        $path = 'admin.orders.index';

        $orders = Order::orderByRaw('CASE 
                        WHEN status = "PENDING" THEN 2 
                        WHEN STATUS = "CONFIRMED" THEN 1
                        WHEN STATUS = "COMPLETED" THEN 3
                        ELSE 4 
                    END, created_at ASC
                    ')
                    ->select('*')
                    ->selectRaw('DATE_FORMAT(created_at, "%d/%m/%Y") AS created_at_date')
                    ->selectRaw('DATE_FORMAT(created_at, "%H:%i:%s") AS created_at_time')
                    ->get();
        $orders->load('customer');

        return view('admin.order.index', compact('path','orders'));
    }

    public function show(Order $order) {
        $path = 'admin.orders.show';

        $order = Order::whereKey($order->id)->select('*')
            ->selectRaw('DATE_FORMAT(created_at, "%d/%m/%Y") AS created_at_date')
            ->selectRaw('DATE_FORMAT(created_at, "%H:%i:%s") AS created_at_time')
            ->first();

        $order->load('admin');

        $order_details = OrderDetail::where('order_id',$order->id)->get();
        $order_details->load([
            'book' => function ($query) {
                $query->withTrashed();
            }
        ]);

        return view('admin.order.show', compact('order','path','order_details'));
    }

    public function changeStatus($status, Order $order) {
        if ($order->admin_id_confirmed != auth('admins')->user()->id && $order->admin_id_confirmed != null) {
            return redirect()->back()->with('fail', 'You can\'t update!');
        }

        if ($order->status == 'PENDING') {
            if ($status == 'COMPLETED') {
                return redirect()->back()->with('fail', "Order can't complete now!");
            }

            $order->load('orderDetails');

            foreach ($order->orderDetails as $value) {
                $book = Book::whereKey($value->book_id)->first();

                if ($book->quantity - $value->quantity < 0) {
                    return redirect()->back()->with('fail', "The book in the order has more than in stock.!");
                }
            }

            $order->update([
                'status' => $status,
                'admin_id_confirmed' => auth('admins')->user()->id
            ]);
        } elseif ($order->status == 'CANCELED') {
            return redirect()->back()->with('fail', "Order is canceled!");
        } elseif ($order->status == 'CONFIRMED') {
            if ($status == 'PENDING') {
                return redirect()->back()->with('fail', "Order can't change to pending now!");
            } elseif ($status == 'COMPLETED') {
                $order->load('orderDetails');

                foreach ($order->orderDetails as $value) {
                    $book = Book::whereKey($value->book_id)->first();

                    if ($book->quantity - $value->quantity < 0) {
                        return redirect()->back()->with('fail', "The book in the order has more than in stock.!");
                    }

                    $book->update([
                        'quantity' => $book->quantity - $value->quantity
                    ]);
                }
            }

            $order->update([
                'status' => $status,
                'admin_id_confirmed' => auth('admins')->user()->id
            ]);
        } elseif ($order->status == 'COMPLETED') {
            return redirect()->back()->with('fail', "Order is completed!");
        }

        return redirect()->back()->with('success', 'Order updated!');
    }

    public function filter($status) {
        $path = 'admin.orders.filter';

        $orders = Order::where('status',$status)
            ->select('*')
            ->selectRaw('DATE_FORMAT(created_at, "%d/%m/%Y") AS created_at_date')
            ->orderBy('updated_at','desc')->get();

        return view('admin.order.index', compact('path','orders'));
    }

    public function showBook(string $book, Order $order) {
        $path = 'admin.orders.filter';

        $book = Book::withTrashed()->whereKey($book)->first();

        $book->load('category');
        $book->load('author');
        $book->load('publisher');

        return view('admin.order.show-book', compact('path', 'book', 'order'));
    }
}
