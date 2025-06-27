<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path = 'admin.categories.index';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('admin.category.categories', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path = 'admin.categories.create';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.category.create', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        Category::create($validated);

        return redirect()->back()->with('success', 'Category is Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $path = 'admin.categories.edit';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();

        return view('admin.category.edit', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        $category->update($validated);

        return redirect()->route('admin.categories.index')->with('success', 'Category is Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if ($category->load('classifying')->classifying()->exists()) {
            return redirect()->route('admin.categories.index')->with('fail', 'Category Cannot Deleted Because It Has Some Book!');
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Category is Deleted');
    }
}
