<?php

use App\Http\Controllers\AdminAccountSettingController;
use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AuthCustomerController;
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

        Route::controller(AdminAccountSettingController::class)->group(function () {
            Route::get('/account-setting', 'showAccountSetting')->name('showAccountSetting');
            Route::patch('/account-setting/{admin}', 'updatePassword')->name('updatePassword');
        });
    });

    Route::middleware('adminGuest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    });
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});

Route::get('/',[Customer::class,'customer']);
Route::get('/account-setting',[Customer::class,'account_setting'])->middleware('customerAuth');
Route::get('/book-page',[Customer::class,'book_page']);
Route::get('/category',[Customer::class,'category']);
Route::get('/checkout',[Customer::class,'Checkout']);
Route::get('/cart-page',[Customer::class,'cart_page']);
Route::get('/order-page',[Customer::class,'order_page']);
Route::get('/order-detail',[Customer::class,'order_detail']);
Route::get('/profile',[Customer::class,'profile'])->middleware('customerAuth');
Route::get('/profile-edit',[Customer::class,'profile_edit'])->middleware('customerAuth');
Route::middleware('customerGuest')->group(function () {
    Route::get('/sign-in',[AuthCustomerController::class,'showLogin'])->name('customer.sign_in.show');
    Route::post('/sign-in', [AuthCustomerController::class,'login'])->name('customer.sign_in');
    Route::get('/sign-up',[AuthCustomerController::class,'showRegister'])->name('customer.sign_up.show');
    Route::post('/sign-up', [AuthCustomerController::class,'register'])->name('customer.sign_up');

});
Route::post('/logout', [AuthCustomerController::class,'logout'])->name('customer.logout');
