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

        $stringCut = $request->search;
        while (strpos($stringCut,' ')) {
            $arrayWord[] = "title LIKE '%".substr($stringCut, 0, strpos($stringCut, ' '))."%'";
            $stringCut = substr($stringCut, strpos($stringCut, ' ')+1, strlen($stringCut));
        }
        $arrayWord[] = "title LIKE '%".$stringCut."%'";

        $sqlLike = '';
        foreach ($arrayWord as $key => $value) {
            if ($key == sizeof($arrayWord)-1) {
                $sqlLike = $sqlLike.$value;
            }else {
                $sqlLike = $sqlLike.$value.' AND ';
            }
        }

        $books = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->whereRaw($sqlLike)->paginate(12);
        $books->load('author');
        $search = $request->search;

        return view('customer.index', compact('books','search'));
    }
}
