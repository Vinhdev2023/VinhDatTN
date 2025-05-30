<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminAccountSettingController extends Controller
{
    public function showAccountSetting() {
        $path = 'admin.showAccountSetting';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.account.setting-personal', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher'));
    }
}
