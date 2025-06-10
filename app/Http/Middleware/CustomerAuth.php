<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('customers')->check()) {
            Auth::logout();

            if (session()->get('cart') != null && session()->get('cart_total') != null) {
                $cart = session()->get('cart');
                $cart_total = session()->get('cart_total');
            }

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            if (isset($cart, $cart_total)) {
                session()->put('cart',$cart);
                session()->put('cart_total',$cart_total);
            }
            
            return redirect()->route('customer.sign_in.show');
        }
        return $next($request);
    }
}
