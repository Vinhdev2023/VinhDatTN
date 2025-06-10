<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index() {
        $path = 'admin.orders.index';

        $orders = Order::orderBy('updated_at', 'desc')->get();

        return view('admin.order.index', compact('path','orders'));
    }
}
