<?php

use App\Http\Controllers\AuthCustomerController;
use App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/account-setting',[Customer::class,'account_setting'])->middleware('customerAuth');
Route::get('/book-page',[Customer::class,'book_page']);
Route::get('/category',[Customer::class,'category']);
Route::get('/checkout',[Customer::class,'Checkout']);
Route::get('/cart-page',[Customer::class,'cart_page']);
Route::get('/order-page',[Customer::class,'order_page'])->middleware('customerAuth');
Route::get('/order-detail',[Customer::class,'order_detail'])->middleware('customerAuth');
Route::get('/profile',[Customer::class,'profile'])->middleware('customerAuth');
Route::get('/profile-edit',[Customer::class,'profile_edit'])->middleware('customerAuth');
Route::middleware('customerGuest')->group(function () {
    Route::get('/sign-in',[AuthCustomerController::class,'showLogin'])->name('customer.sign_in.show');
    Route::post('/sign-in', [AuthCustomerController::class,'login'])->name('customer.sign_in');
    Route::get('/sign-up',[AuthCustomerController::class,'showRegister'])->name('customer.sign_up.show');
    Route::post('/sign-up', [AuthCustomerController::class,'register'])->name('customer.sign_up');

});
Route::post('/logout', [AuthCustomerController::class,'logout'])->name('customer.logout');