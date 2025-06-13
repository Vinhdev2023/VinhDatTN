<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $request->validate([
            'search' => 'required|string|min:1'
        ]);
        $firstWord = substr($request->search, 0 , strpos($request->search,' '));
        $stringCut = substr('ab', strpos('ab',' ')+1 , strlen('ab'));

        $arrayWord[] = $firstWord;
        $arrayWord[] = $firstWord;
        $arrayWord[] = $firstWord;

        dd($request->all(), $firstWord, $stringCut, $arrayWord, strpos('ab',' '));
        $books = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->paginate(12);
        $books->load('author');

        return view('customer.index', compact('books'));
    }
}
