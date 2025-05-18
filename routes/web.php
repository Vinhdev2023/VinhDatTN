<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [AdminHomeController::class, 'index'])->middleware('adminAuth')->name('admin.index');
Route::get('/admin/login', [AdminLoginController::class, 'showLogin'])->middleware('adminGuest')->name('admin.showLogin');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->middleware('adminGuest')->name('admin.login');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');