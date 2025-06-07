<?php

use App\Http\Controllers\AuthCustomerController;
use App\Http\Controllers\BookViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/account-setting',[Customer::class,'account_setting'])->middleware('customerAuth');
Route::get('/book-page/{book}',[BookViewController::class,'view']);
Route::get('/category',[Customer::class,'category']);
Route::get('/checkout',[Customer::class,'Checkout'])->middleware('customerAuth');

Route::get('/cart-page',[CartController::class,'index']);
Route::get('/add-cart/{book}',[CartController::class,'addCart']);
Route::get('/remove-in-cart/{book}',[CartController::class,'removeInCart']);

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