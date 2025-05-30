<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

    public function updatePassword(Request $request, Admin $admin) {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ]);

        if (Hash::check($request->old_password, $admin->password)) {
            $admin->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('admin.showAccountSetting')->with('success', 'password is updated');
        }
        
        return ValidationException::withMessages([
            'credentials' => 'sorry, incorrect credentials'
        ]);
    }
}
