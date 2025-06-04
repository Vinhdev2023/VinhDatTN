<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminPublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path = 'admin.publishers.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $publishers = Publisher::orderBy('updated_at', 'desc')->get();

        return view('admin.publisher.publishers', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path = 'admin.publishers.create';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.publisher.create', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:publishers,name'
        ]);

        Publisher::create($validated);

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher is Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        $path = 'admin.publishers.edit';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.publisher.edit', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'publishers', 'publisher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publisher $publisher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:publishers,name'
        ]);

        $publisher->update($validated);

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        if($publisher->load('book')->book()->exists()){
            return redirect()->route('admin.publishers.index')->with('fail', 'Publisher Cannot Deleted Because It Has Some Book!');
        }

        $publisher->delete();

        return redirect()->route('admin.publishers.index')->with('success', 'Publisher Deleted!');
    }
}
