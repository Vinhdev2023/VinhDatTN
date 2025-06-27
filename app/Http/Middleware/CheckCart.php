<?php

namespace App\Http\Middleware;

use App\Models\Book;
use App\Models\Order;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class CheckCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->get('cart') == null && session()->get('cart_total') == null) {
            return redirect('/cart-page');
        }

        $cart = session()->get('cart');
        $orderPendingorConfirmed = Order::whereIn('status', ['PENDING', 'CONFIRMED'])
            ->with(['orderDetails' => function ($query) {
                $query->select('order_id', 'book_id', DB::raw('SUM(quantity) as total_quantity'))->groupBy('book_id', 'order_id');
            }])
            ->get();

        foreach ($cart as $value) {
            $book = Book::whereKey($value->id)->first();

            if ($book == null) {
                session()->forget('cart');
                session()->forget('cart_total');
                session()->save();

                return redirect()->back();
            }

            // Tính tổng số lượng sách đã đặt từ tất cả đơn hàng liên quan
            $bookTaken = $orderPendingorConfirmed->pluck('orderDetails')
                ->flatten()
                ->where('book_id', $value->id)
                ->sum('total_quantity');

            if ($book->quantity - $bookTaken <= 0) {                    
                return redirect('/cart-page');
            }
        }

        return $next($request);
    }
}
