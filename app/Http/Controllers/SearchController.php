<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class SearchController extends Controller
{
    public function search(Request $request) {
        $request->validate([
            'search' => 'max:30'
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

        $sqlLike = 'books.quantity > 0 AND ';
        foreach ($arrayWord as $key => $value) {
            if ($key == sizeof($arrayWord)-1) {
                $sqlLike = $sqlLike.$value;
            }else {
                $sqlLike = $sqlLike.$value.' AND ';
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

        $books = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('classifyings','books.id','=','classifyings.book_id')
                    ->join('categories','classifyings.category_id','=','categories.id')
                    ->join('writings', 'books.id', '=', 'writings.book_id')
                    ->join('authors', 'writings.author_id', '=', 'authors.id')
                    ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->whereRaw($sqlLike)
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->paginate(12)->appends(['search' => $search, 'price' => $fillter_price, 'fillter_category' => $fillter_category]);
        $books->load('author');

        $flag = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->join('classifyings','books.id','=','classifyings.book_id')
                    ->join('categories','classifyings.category_id','=','categories.id')
                    ->join('writings', 'books.id', '=', 'writings.book_id')
                    ->join('authors', 'writings.author_id', '=', 'authors.id')
                    ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->whereRaw($sqlLike)
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->count();

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('customer.index', compact('books','search','flag', 'categories', 'authors', 'publishers', 'fillter_price', 'fillter_category', 'fillter_publisher', 'fillter_author'));
    }
}
