<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthCustomerController extends Controller
{
    public function showRegister () {
        return view('customer.sign-up');
    }

    public function showLogin () {
        return view('customer.sign-in');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'password' => 'required|string|min:1|confirmed'
        ]);

        Customer::create($validated);

        return redirect()->route('customer.sign_in.show');
    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:1'
        ]);

        if (Auth::guard('customers')->attempt($validated)) {
            $request->session()->regenerate();

            if (session()->get('cart') != null && session()->get('cart_total') != null) {
                return redirect('/cart-page');
            }

            return redirect('/');
        }

        throw ValidationException::withMessages([
            'credentials' => 'sorry, incorrect credentials'
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('customer.sign_in.show');
    }

    public function chgpw(Request $request) {
        $request->validate([
            'old_password' => 'required|string',
            'password' => 'required|string|min:1|confirmed'
        ]);

        $customer = Customer::whereKey(auth('customers')->user()->id)->first();

        if (Hash::check($request->old_password, $customer->password)) {
            $customer->update([
                'password' => Hash::make($request->password)
            ]);

            return redirect('/profile-edit')->with('success', 'password is updated');
        }

        return ValidationException::withMessages([
            'credentials' => 'sai mật khẩu rồi'
        ]);
    }
}
