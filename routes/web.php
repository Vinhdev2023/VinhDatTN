<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\Customer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('adminAuth')->name('admin.index');
Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])->middleware('adminGuest')->name('admin.showLogin');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->middleware('adminGuest')->name('admin.login');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/customer/index',[Customer::class,'customer']);
Route::get('/customer/account_setting',[Customer::class,'account_setting']);
Route::get('/customer/add_user',[Customer::class,'add_user']);
Route::get('/customer/book_page',[Customer::class,'book_page']);
Route::get('/customer/category',[Customer::class,'category']);
Route::get('/customer/Checkout',[Customer::class,'Checkout']);
Route::get('/customer/profile',[Customer::class,'profile']);
Route::get('/customer/profile_edit',[Customer::class,'profile_edit']);
Route::get('/customer/sign_in',[Customer::class,'sign_in']);
Route::get('/customer/sign_up',[Customer::class,'sign_up']);
