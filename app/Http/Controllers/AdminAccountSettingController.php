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

        $admin = Admin::whereKey(auth('admins')->user()->id)->first();
        $admin->load('order');

        return view('admin.account.setting-personal', compact('path','admin'));
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $admin = Admin::whereKey(auth('admins')->user()->id)->first();

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
