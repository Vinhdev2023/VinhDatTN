<?php

namespace App\Http\Controllers;

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

        $order_details = OrderDetail::where('order_id',$order->id)->get();
        $order_details->load('book');

        return view('admin.order.show', compact('order','path','order_details'));
    }
}
