<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index() {
        $path = 'admin.orders.index';

        $orders = Order::orderByRaw('CASE WHEN status = "PENDING" THEN 1 ELSE 2 END, updated_at DESC')->when('PENDING')->get();

        return view('admin.order.index', compact('path','orders'));
    }
}
