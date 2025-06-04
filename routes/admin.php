<?php

use App\Http\Controllers\AdminAccountSettingController;
use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminControlAccountController;
use App\Http\Controllers\AdminControlCustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPublisherController;

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

        Route::controller(AdminControlAccountController::class)->group(function () {
            Route::get('/employee-account', 'index')->name('account.index');
            Route::post('/employee-account', 'store')->name('account.store');
            Route::get('/employee-account/trashed', 'trashed')->name('account.trashed');

            Route::middleware('adminRole')->group(function () {
                Route::get('/employee-account/create', 'add')->name('account.add');
                Route::delete('/employee-account/{admin}', 'destroy')->name('account.destroy');
                Route::post('/employee-account/restore/{admin}', 'restore')->name('account.restore');
            });
        });

        Route::controller(AdminControlCustomerController::class)->group(function () {
            Route::get('/customer-account', 'index')->name('customer.index');
            Route::delete('/customer-account/{customer}', 'destroy')->name('customer.destroy');

            Route::get('/customer-account/trashed', 'trashed')->name('customer.trashed');
            Route::post('/customer-account/{customer}/restore', 'restore')->name('customer.restore');
        });
    });

    Route::middleware('adminGuest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    });
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});