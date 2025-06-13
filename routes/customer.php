<?php

use App\Http\Controllers\AuthCustomerController;
use App\Http\Controllers\BookViewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Customer;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/',[Customer::class,'customer']);

Route::get('/search', [SearchController::class,'search']);

Route::get('/account-setting',[Customer::class,'account_setting'])->middleware('customerAuth');
Route::get('/book-page/{book}',[BookViewController::class,'view']);

Route::get('/checkout',[Customer::class,'Checkout'])->middleware(['customerAuth', 'checkCart']);
Route::get('/buy-now/{book}',[OrderController::class,'buyNow']);
Route::post('/add-order',[OrderController::class,'addOrder'])->middleware(['customerAuth', 'checkCart']);
Route::get('/order-page',[OrderController::class,'order_page'])->middleware('customerAuth');
Route::get('/order-detail/{order}',[OrderController::class,'order_detail'])->middleware('customerAuth');
Route::get('/update-status/{status}/{order}',[OrderController::class,'update_status'])->middleware('customerAuth');

Route::get('/cart-page',[CartController::class,'index']);
Route::get('/add-cart/{book}',[CartController::class,'addCart']);
Route::get('/remove-in-cart/{book}',[CartController::class,'removeInCart']);
Route::post('/update-cart/{book}',[CartController::class,'updateCart']);

Route::get('/profile-edit',[Customer::class,'profile_edit'])->middleware('customerAuth');
Route::middleware('customerGuest')->group(function () {
    Route::get('/sign-in',[AuthCustomerController::class,'showLogin'])->name('customer.sign_in.show');
    Route::post('/sign-in', [AuthCustomerController::class,'login'])->name('customer.sign_in');
    Route::get('/sign-up',[AuthCustomerController::class,'showRegister'])->name('customer.sign_up.show');
    Route::post('/sign-up', [AuthCustomerController::class,'register'])->name('customer.sign_up');

});
Route::post('/logout', [AuthCustomerController::class,'logout'])->name('customer.logout');