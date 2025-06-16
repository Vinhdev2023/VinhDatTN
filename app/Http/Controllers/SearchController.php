<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SearchController extends Controller
{
    public function search(Request $request) {
        $request->validate([
            'search' => 'required|string|max:50'
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

        foreach ($arrayCharset as $key => $value) {
            if (strlen($value) > 9) {
                throw ValidationException::withMessages([
                    'word' => 'từ quá dài',
                ]);
            }
        }

        $sqlLike = '';
        foreach ($arrayWord as $key => $value) {
            if ($key == sizeof($arrayWord)-1) {
                $sqlLike = $sqlLike.$value;
            }else {
                $sqlLike = $sqlLike.$value.' AND ';
            }
        }

        $books = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->whereRaw($sqlLike)->paginate(12)->appends(['search' => $search]);
        $books->load('author');

        $flag = Book::orderBy('created_at', 'desc')->where('quantity', '>', 0)->whereRaw($sqlLike)->count();

        if ($flag == 0) {
            $caseSql = [];
            foreach ($arrayCharset as $key => $value) {
                $length = strlen($value);
                $totalCombinations = pow(2, $length);
                for ($i=0; $i < $totalCombinations; $i++) {
                    $temp = $value;
                    for ($j=0; $j < $length; $j++) { 
                        if ($i & (1 << $j)) {
                            $temp[$j] = '_';
                        }
                    }

                    $point = substr_count($temp, '_');
                    $point = $length - $point;
                    $caseSql[] = 'CASE WHEN title LIKE \'%'.$temp.'%\' THEN '.$point.' ELSE 0 END';
                }
            }
        }

        if (isset($caseSql)) {
            $sqlRelevation = '';
            foreach ($caseSql as $key => $value) {
                $sqlRelevation = $sqlRelevation.$value.' +'.PHP_EOL;
            }

            $books = Book::selectRaw('*, ('.PHP_EOL.$sqlRelevation.PHP_EOL.'0) AS relevation')->where('quantity', '>', 0)->having('relevation', '>', 0)->orderBy('relevation', 'desc')->orderBy('created_at', 'desc')->paginate(12)->appends(['search' => $search]);
            $books->load('author');

            $flag = Book::selectRaw('*, ('.PHP_EOL.$sqlRelevation.PHP_EOL.'0) AS relevation')->where('quantity', '>', 0)->having('relevation', '>', 0)->orderBy('relevation', 'desc')->orderBy('created_at', 'desc')->count();
        }

        return view('customer.index', compact('books','search','flag'));
    }
}
