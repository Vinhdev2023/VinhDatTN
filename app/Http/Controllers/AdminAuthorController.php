<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AdminAuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path='admin.authors.index';
        $authors = Author::orderBy('updated_at', 'desc')->get();
        return view('admin.author.authors', compact('path', 'authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path='admin.authors.create';
        return view('admin.author.create', compact('path'));
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

        return redirect();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
