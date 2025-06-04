<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminControlCustomerController extends Controller
{
    public function index() {
        $path = 'admin.customer.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $customers = Customer::orderBy('created_at', 'desc')->get();

        return view('admin.customer.customers', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'customers'));
    }

    public function destroy(Customer $customer) {
        $customer->delete();

        return redirect()->route('admin.customer.index')->with('success', 'Customer is Locked');
    }

    public function trashed() {
        $path = 'admin.customer.trashed';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $customers = Customer::onlyTrashed()->orderBy('created_at', 'desc')->get();

        return view('admin.customer.customers-trashed', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'customers'));
    }

    public function restore(string $customer) {
        Customer::onlyTrashed()->findOrFail($customer)->restore();

        return redirect()->route('admin.customer.trashed')->with('success', 'Customer is unlocked');
    }
}
