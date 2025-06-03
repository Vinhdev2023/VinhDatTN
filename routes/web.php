<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer;

require __DIR__.'/admin.php';

require __DIR__.'/customer.php';

Route::get('/',[Customer::class,'customer']);
