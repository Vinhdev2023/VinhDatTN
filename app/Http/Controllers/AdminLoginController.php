<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    public function showLogin() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $vadilated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        // $email = $request->email;
        // $password = $request->password;
        // dd($vadilated);
        if (Auth::guard('admins')->attempt($vadilated)) {
            // $request->session()->regenerate();

            return redirect()->route('admin.index');
        }

        throw ValidationException::withMessages([
            'credentials' => 'sorry, incorrect credentials'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.showLogin');
    }
}
