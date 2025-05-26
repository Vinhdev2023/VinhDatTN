<?php

use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPublisherController;
use App\Http\Controllers\Customer;

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('adminAuth')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        Route::resource('/books', AdminBookController::class);
        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/publishers', AdminPublisherController::class);
        Route::resource('/authors', AdminAuthorController::class);
    });

    Route::middleware('adminGuest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    });
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

Route::get('/',[Customer::class,'customer']);
Route::get('/account_setting',[Customer::class,'account_setting']);
Route::get('/book-page',[Customer::class,'book_page']);
Route::get('/category',[Customer::class,'category']);
Route::get('/Checkout',[Customer::class,'Checkout']);
Route::get('/profile',[Customer::class,'profile']);
Route::get('/profile-edit',[Customer::class,'profile_edit']);
Route::get('/sign-in',[Customer::class,'sign_in']);
Route::get('/sign-up',[Customer::class,'sign_up']);
