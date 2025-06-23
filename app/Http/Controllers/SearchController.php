<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class SearchController extends Controller
{
    public function search(Request $request) {
        $request->validate([
            'search' => 'required|string|max:30'
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

        $sqlLike = '';
        foreach ($arrayWord as $key => $value) {
            if ($key == sizeof($arrayWord)-1) {
                $sqlLike = $sqlLike.$value;
            }else {
                $sqlLike = $sqlLike.$value.' AND ';
            }
        }

        $books = Book::with('orderDetail.order')
                    ->leftJoin('order_details', 'books.id', '=', 'order_details.book_id')
                    ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
                    ->select(
                        'books.*',
                        DB::raw('COALESCE(books.quantity - SUM(CASE WHEN orders.status IN ("PENDING", "CONFIRMED") THEN order_details.quantity ELSE 0 END), 0) as real_quantity')
                    )
                    ->whereRaw($sqlLike)
                    ->groupBy('books.id', 'books.isbn_code', 'books.title', 'books.image', 'books.quantity', 'books.price', 'books.description', 'books.publisher_id', 'books.deleted_at', 'books.updated_at', 'books.created_at')
                    ->orderByDesc('books.created_at')
                    ->paginate(12)->appends(['search' => $search]);
        $books->load('author');

        $flag = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->whereRaw($sqlLike)->count();

        return view('customer.index', compact('books','search','flag'));
    }
}
