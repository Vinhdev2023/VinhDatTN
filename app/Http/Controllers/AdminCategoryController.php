<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path='admin.categories.index';
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('admin.category.categories', compact('path', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path='admin.categories.create';
        return view('admin.category.create', compact('path'));
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

        return redirect()->route('admin.categories.index')->with('success', 'Category is Created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $path='admin.categories.edit';
        return view('admin.category.edit', compact('path', 'category'));
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
