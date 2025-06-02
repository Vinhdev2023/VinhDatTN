<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Customer extends Controller
{
    public function customer(){
        return view('customer.index');
    }

    public function account_setting(){
        return view('customer.account-setting');
    }

    public function book_page(){
        return view('customer.book-page');
    }
    public function category(){
        return view('customer.category');
    }
    public function Checkout(){
        return view('customer.Checkout');
    }
    public function cart_page(){
        return view('customer.cart-page');
    }
    public function profile(){
        return view('customer.profile');
    }
    public function order_detail(){
        return view('customer.order-detail');
    }
    public function order_page(){
        return view('customer.order-page');
    }
    public function profile_edit(){
        return view('customer.profile-edit');
    }
    public function sign_in(){
        return view('customer.sign-in');
    }
    public function sign_up(){
        return view('customer.sign-up');
    }
}
