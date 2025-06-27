<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Classifying;
use App\Models\Publisher;
use App\Models\Writing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path = 'admin.books.index';

        $books = Book::orderBy('updated_at', 'desc')->paginate(5);

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('admin.book.books', compact('path', 'books', 'publishers', 'authors', 'categories'));
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
            'quantity' => 'required|integer|min:0',
            'price' => 'required|integer|min:1000',
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
        $path = 'admin.books.index';

        $book->load('category');
        $book->load('author');
        $book->load('publisher');
        // dd(sizeof($book->author));
        // dd($book->category);
        return view('admin.book.show', compact('path', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $path = 'admin.books.edit';
        $num_book = Book::count();
        $num_category = Category::count();
        $num_author = Author::count();
        $num_publisher = Publisher::count();
        
        $categories = Category::all();
        $authors = Author::all();
        $publishers = Publisher::all();
        $book->load('category');
        $book->load('author');
        $book->load('publisher');
        
        return view('admin.book.edit', compact('path', 'num_book', 'num_category', 'num_author', 'num_publisher', 'categories', 'authors', 'publishers', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'isbn_code' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'image' => 'image',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|integer|min:1000',
            'description' => 'required',
            'categories' => 'required|exists:categories,id',
            'authors' => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        $ortherBooks = DB::table(
            DB::table('books', 'orther_book')
            ->whereNot('id', $book->id))
                ->where('title', $request->title)
                ->where('isbn_code', $request->isbn_code)
                ->count();
        if ($ortherBooks > 0) {
            return throw ValidationException::withMessages([
                'isbn_code' => 'isbn code has already been taken',
                'title' => 'title has already been taken'
            ]);
        }

        $ortherBooksIsbnCode = DB::table(
            DB::table('books', 'orther_book')
            ->whereNot('id', $book->id))
                ->where('isbn_code', $request->isbn_code)
                ->count();
        if ($ortherBooksIsbnCode > 0) {
            return throw ValidationException::withMessages([
                'isbn_code' => 'isbn code has already been taken'
            ]);
        }

        $ortherBooksTitle = DB::table(
            DB::table('books', 'orther_book')
            ->whereNot('id', $book->id))
                ->where('title', $request->title)
                ->count();
        if ($ortherBooksTitle > 0) {
            return throw ValidationException::withMessages([
                'title' => 'title has already been taken'
            ]);
        }

        if ($request->image != null) {
            $image = $request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $image);
        } else {
            $image = $book->image;
        }
        $book->update($validated);
        $book->update([
            'image' => $image
        ]);

        Classifying::where('book_id', $book->id)->delete();
        foreach ($validated['categories'] as $category_id) {
            Classifying::create([
                'book_id' => $book->id,
                'category_id' => $category_id
            ]);
        }

        Writing::where('book_id', $book->id)->delete();
        foreach ($validated['authors'] as $author_id) {
            Writing::create([
                'book_id' => $book->id,
                'author_id' => $author_id
            ]);
        }

        return redirect()->route('admin.books.show', $book->id)->with('success', 'Book is Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->update([
            'quantity' => 0
        ]);

        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book is Deleted');
    }

    public function trashed() {
        $path = 'admin.books.trashed';

        $books = Book::orderBy('updated_at', 'desc')->onlyTrashed()->paginate(5);

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('admin.book.trashed', compact('path', 'books', 'publishers', 'authors', 'categories'));
    }

    public function checked(string $id) {
        $path = 'admin.books.checked';

        $book = Book::onlyTrashed()->whereKey($id)->first();

        $book->load('category');
        $book->load('author');
        $book->load('publisher');

        return view('admin.book.checked', compact('path', 'book'));
    }

    public function restore(string $id) {
        Book::whereKey($id)->restore();

        return redirect()->route('admin.books.trashed')->with('success', 'Book is Restore');
    }

    public function forceDestroy(string $id) {
        $book = Book::onlyTrashed()->whereKey($id)->first();

        $book->load('orderDetail');
        if (sizeof($book->orderDetail) == 0) {
            Classifying::where('book_id', '=', $book->id)->delete();
            Writing::where('book_id', '=', $book->id)->delete();
            $book->forceDelete();
            return redirect()->route('admin.books.trashed')->with('success', 'Book is Deleted');
        }

        return redirect()->route('admin.books.checked', $id)->with('fail', 'This book cannot be completely deleted.');
    }

    public function search(Request $request) {
        $path = 'admin.books.index';
        
        $request->validate([
            'search' => 'max:255'
        ]);

        $stringCut = $request->search;
        $search = $request->search;

        $stringCut = trim($stringCut);
        while (strpos($stringCut,' ')) {
            $arrayWord[] = "title LIKE '%".substr($stringCut, 0, strpos($stringCut, ' '))."%'";
            $arrayCharset[] = substr($stringCut, 0, strpos($stringCut, ' '));
            $stringCut = substr($stringCut, strpos($stringCut, ' ')+1, strlen($stringCut));
            $stringCut = ltrim($stringCut);
        }
        $arrayWord[] = "title LIKE '%".$stringCut."%'";
        $arrayCharset[] = $stringCut;

        $sqlLike = 'books.created_at is not null';
        if ($request->search != null) {
            $sqlLike .= ' AND ';
            foreach ($arrayWord as $key => $value) {
                if ($key == sizeof($arrayWord)-1) {
                    $sqlLike = $sqlLike.$value;
                }else {
                    $sqlLike = $sqlLike.$value.' AND ';
                }
            }
        }

        if ($request->price != null ) {
            list($min, $max) = explode('-', $request->price);

            $sqlLike .= " AND books.price >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND books.price <= ".$max;
            }

            $fillter_price = $request->price;
        } else {
            $fillter_price = null;
        }

        if ($request->quantity != null ) {
            list($min, $max) = explode('-', $request->quantity);

            $sqlLike .= " AND books.quantity >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND books.quantity <= ".$max;
            }

            $fillter_quantity = $request->quantity;
        } else {
            $fillter_quantity = null;
        }

        if ($request->category != null) {
            $sqlLike .= " AND categories.id = ".$request->category;

            $fillter_category = $request->category;
        } else {
            $fillter_category = null;
        }

        if ($request->publisher != null) {
            $sqlLike .= " AND publishers.id = ".$request->publisher;

            $fillter_publisher = $request->publisher;
        } else {
            $fillter_publisher = null;
        }

        if ($request->author != null) {
            $sqlLike .= " AND authors.id = ".$request->author;

            $fillter_author = $request->author;
        } else {
            $fillter_author = null;
        }

        $books = Book::leftJoin('classifyings','books.id','=','classifyings.book_id')
                    ->leftJoin('categories','classifyings.category_id','=','categories.id')
                    ->leftJoin('writings', 'books.id', '=', 'writings.book_id')
                    ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                    ->leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->select(
                        'books.*'
                    )
                    ->WhereRaw($sqlLike)
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.updated_at')
                    ->paginate(5)
                    ->appends([
                        'price' => $fillter_price, 
                        'category' => $fillter_category, 
                        'publisher' => $fillter_publisher, 
                        'author' => $fillter_author, 
                        'quantity' => $fillter_quantity, 
                        'search' => $search
                    ]);

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('admin.book.books', compact('path', 'books', 'search', 'categories', 'authors', 'publishers', 'fillter_price', 'fillter_category', 'fillter_publisher', 'fillter_author', 'fillter_quantity'));
    }

    public function trashedSearch(Request $request) {
        $path = 'admin.books.trashed';
        
        $request->validate([
            'search' => 'max:255'
        ]);

        // dd($request->all());

        $stringCut = $request->search;
        $search = $request->search;

        $stringCut = trim($stringCut);
        while (strpos($stringCut,' ')) {
            $arrayWord[] = "title LIKE '%".substr($stringCut, 0, strpos($stringCut, ' '))."%'";
            $arrayCharset[] = substr($stringCut, 0, strpos($stringCut, ' '));
            $stringCut = substr($stringCut, strpos($stringCut, ' ')+1, strlen($stringCut));
            $stringCut = ltrim($stringCut);
        }
        $arrayWord[] = "title LIKE '%".$stringCut."%'";
        $arrayCharset[] = $stringCut;

        $sqlLike = 'books.created_at is not null';
        if ($request->search != null) {
            $sqlLike .= ' AND ';
            foreach ($arrayWord as $key => $value) {
                if ($key == sizeof($arrayWord)-1) {
                    $sqlLike = $sqlLike.$value;
                }else {
                    $sqlLike = $sqlLike.$value.' AND ';
                }
            }
        }

        if ($request->price != null ) {
            list($min, $max) = explode('-', $request->price);

            $sqlLike .= " AND books.price >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND books.price <= ".$max;
            }

            $fillter_price = $request->price;
        } else {
            $fillter_price = null;
        }

        if ($request->quantity != null ) {
            list($min, $max) = explode('-', $request->quantity);

            $sqlLike .= " AND books.quantity >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND books.quantity <= ".$max;
            }

            $fillter_quantity = $request->quantity;
        } else {
            $fillter_quantity = null;
        }

        if ($request->category != null) {
            $sqlLike .= " AND categories.id = ".$request->category;

            $fillter_category = $request->category;
        } else {
            $fillter_category = null;
        }

        if ($request->publisher != null) {
            $sqlLike .= " AND publishers.id = ".$request->publisher;

            $fillter_publisher = $request->publisher;
        } else {
            $fillter_publisher = null;
        }

        if ($request->author != null) {
            $sqlLike .= " AND authors.id = ".$request->author;

            $fillter_author = $request->author;
        } else {
            $fillter_author = null;
        }

        $books = Book::onlyTrashed()
                    ->leftJoin('classifyings','books.id','=','classifyings.book_id')
                    ->leftJoin('categories','classifyings.category_id','=','categories.id')
                    ->leftJoin('writings', 'books.id', '=', 'writings.book_id')
                    ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                    ->leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->select(
                        'books.*'
                    )
                    ->WhereRaw($sqlLike)
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->paginate(5)->appends(['price' => $fillter_price, 'category' => $fillter_category, 'publisher' => $fillter_publisher, 'author' => $fillter_author, 'quantity' => $fillter_quantity, 'search' => $search]);

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('admin.book.trashed', compact('path', 'books', 'search', 'categories', 'authors', 'publishers', 'fillter_price', 'fillter_category', 'fillter_publisher', 'fillter_author', 'fillter_quantity'));
    }
}
