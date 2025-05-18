<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        $path = '/admin';
        // view('components.admin-layout', ['path' => $path]);
        return view('admin.index', ['path' => $path]);
    }
}
