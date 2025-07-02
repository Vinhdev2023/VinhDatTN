<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path = 'admin.authors.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $authors = Author::orderBy('updated_at', 'desc')->get();
        
        return view('admin.author.authors', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path='admin.authors.create';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.author.create', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:authors,name'
        ]);

        Author::create($validated);

        return redirect()->back()->with('success', 'Author is Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        $path='admin.authors.edit';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();
        
        return view('admin.author.edit', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:authors,name'
        ]);

        $author->update($validated);

        return redirect()->route('admin.authors.index')->with('success', 'Author is Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        if ($author->load('writing')->writing()->exists()) {
            return redirect()->route('admin.authors.index')->with('fail', 'Author Cannot Deleted Because It Has Some Book!');
        }

        $author->delete();

        return redirect()->route('admin.authors.index')->with('success', 'Author is Delete');
    }
}
