<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminControlAccountController extends Controller
{
    public function index() {
        $path = 'admin.account.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $employees = Admin::orderBy('created_at', 'desc')->get();

        return view('admin.account.employees', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'employees'));
    }

    public function add() {
        $path = 'admin.account.add';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.account.add-employee', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required'
        ]);

        if ($request->role != 'employee' && $request->role != 'admin') {
            return ValidationException::withMessages([
                'error' => 'This role does not exist.'
            ]);
        }

        Admin::factory()->create($validated);

        return redirect()->route('admin.account.index')->with('success', 'employee is added');
    }

    public function destroy(Admin $admin) {
        $admin->delete();

        return redirect()->route('admin.account.index')->with('success', 'Account is locked');
    }

    public function trashed() {
        $path = 'admin.account.trashed';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $employees = Admin::onlyTrashed()->orderBy('updated_at', 'desc')->get();

        return view('admin.account.employees-trashed', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'employees'));
    }

    public function restore(string $admin) {
        $admin = Admin::onlyTrashed()->findOrFail($admin)->restore();

        return redirect()->route('admin.account.trashed')->with('success', 'Account is unlocked');
    }
}
