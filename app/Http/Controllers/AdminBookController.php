<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Classifying;
use App\Models\Publisher;
use App\Models\Writing;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path='admin.books.index';
        $books = Book::orderBy('updated_at', 'desc')->get();
        return view('admin.book.books', compact('path', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $path = 'admin.books.create';
        $categories = Category::all();
        $authors = Author::all();
        $publishers = Publisher::all();
        return view('admin.book.create', compact('path', 'categories', 'authors', 'publishers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn_code' => 'required|string|max:255|unique:books,isbn_code',
            'title' => 'required|string|max:255|unique:books,title',
            'image' => 'required|image',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required',
            'categories' => 'required|exists:categories,id',
            'authors' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        $image = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'), $image);

        $book = Book::create($validated);
        $book->update([
            'image' => $image
        ]);

        foreach ($validated['categories'] as $category_id) {
            Classifying::create([
                'book_id' => $book->id,
                'category_id' => $category_id
            ]);
        }

        foreach ($validated['authors'] as $author_id) {
            Writing::create([
                'book_id' => $book->id,
                'author_id' => $author_id
            ]);
       }

        return redirect()->route('admin.books.index')->with('success', 'Book is Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $path='admin.books.index';
        $book->load('category');
        $book->load('author');
        $book->load('publisher');
        // dd($book->author);
        // dd($book->category);
        return view('admin.book.show', compact('path', 'book'));
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
