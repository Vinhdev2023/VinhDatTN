<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\Customer;

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('adminAuth')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        
    });

    Route::middleware('adminGuest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    });
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

Route::get('/',[Customer::class,'customer']);
Route::get('/account_setting',[Customer::class,'account_setting']);
Route::get('/add_user',[Customer::class,'add_user']);
Route::get('/book-page',[Customer::class,'book_page']);
Route::get('/category',[Customer::class,'category']);
Route::get('/Checkout',[Customer::class,'Checkout']);
Route::get('/profile',[Customer::class,'profile']);
Route::get('/profile_edit',[Customer::class,'profile_edit']);
Route::get('/sign_in',[Customer::class,'sign_in']);
Route::get('/sign_up',[Customer::class,'sign_up']);
