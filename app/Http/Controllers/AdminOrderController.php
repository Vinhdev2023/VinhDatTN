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

        $orders = Order::orderByRaw('CASE WHEN status = "PENDING" THEN 1 ELSE 2 END, updated_at DESC')->when('PENDING')->get();

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
        $order_details->load('book');

        return view('admin.order.show', compact('order','path','order_details'));
    }

    public function changeStatus($status, Order $order) {
        if ($order->status == 'PENDING') {
            if ($status == 'COMPLETED') {
                return redirect()->back()->with('fail', "Order can't complete now!");
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
}
