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
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminPublisherController;
use App\Http\Controllers\AdminStatisticController;

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('adminAuth')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');

        Route::resource('/books', AdminBookController::class);
        
        Route::get('/books-trashed', [AdminBookController::class, 'trashed'])->name('books.trashed');
        Route::get('/books-checked/{book}', [AdminBookController::class, 'checked'])->name('books.checked');
        Route::get('/books-restore/{book}', [AdminBookController::class, 'restore'])->name('books.restore');
        Route::delete('/books-forceDestroy/{book}', [AdminBookController::class, 'forceDestroy'])->name('books.forceDestroy');

        Route::resource('/categories', AdminCategoryController::class);
        Route::resource('/publishers', AdminPublisherController::class);
        Route::resource('/authors', AdminAuthorController::class);

        Route::controller(AdminAccountSettingController::class)->group(function () {
            Route::get('/account-setting', 'showAccountSetting')->name('showAccountSetting');
            Route::patch('/account-setting/updatePassword', 'updatePassword')->name('updatePassword');
        });

        Route::controller(AdminControlAccountController::class)->group(function () {
            Route::get('/employee-account', 'index')->name('account.index');
            Route::get('/employee-account/trashed', 'trashed')->name('account.trashed');
            
            Route::middleware('adminRole')->group(function () {
                Route::post('/employee-account', 'store')->name('account.store');
                Route::get('/employee-account/create', 'add')->name('account.add');
                Route::delete('/employee-account/{admin}', 'destroy')->name('account.destroy');
                Route::post('/employee-account/restore/{admin}', 'restore')->name('account.restore');
                Route::get('/employee-account/{admin}/show-orders-checked', 'showOrderChecked')->name('account.showOrderChecked');
                Route::get('/employee-account/orders-change/{order}', 'orderChange')->name('account.orderChange');
            });
        });

        Route::controller(AdminControlCustomerController::class)->group(function () {
            Route::get('/customer-account', 'index')->name('customer.index');
            Route::delete('/customer-account/{customer}', 'destroy')->name('customer.destroy');

            Route::get('/customer-account/trashed', 'trashed')->name('customer.trashed');
            Route::post('/customer-account/{customer}/restore', 'restore')->name('customer.restore');
        });

        Route::controller(AdminOrderController::class)->group(function () {
            Route::get('/orders','index')->name('orders.index');
            Route::get('/orders/{order}/show','show')->name('orders.show');
            Route::get('/orders/update/{status}/{order}','changeStatus')->name('orders.update');
            Route::get('/orders/filter/{status}','filter')->name('orders.filter');
        });

        Route::controller(AdminStatisticController::class)->group(function () {
            Route::get('/statistics','statistic_view')->name('statistics');
            Route::post('/statistics','statistic_get_data')->name('statistics.data');
        });
    });

    Route::middleware('adminGuest')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLogin'])->name('showLogin');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');
    });
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
});
