<?php

namespace App\Http\Controllers;

use App\Enums\EnumsOrderStatus;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStatisticController extends Controller
{
    public function statistic_view(){
        $path = 'admin.statistics';

        $EndDate = DB::table('orders')->selectRaw("DATE_FORMAT(MAX(created_at), '%d-%m-%Y') AS max")->first()->max;
        $StartDate = DB::table('orders')->selectRaw("DATE_FORMAT(MIN(created_at), '%d-%m-%Y') AS min")->first()->min;

        if ($EndDate != null && $StartDate != null) {
            $dateInput = $StartDate.' - '.$EndDate;
        } else {
            $dateInput = date('d-m-Y').' - '.date('d-m-Y');
        }


        $EndDate = date_format(date_create($EndDate), 'Y-m-d');
        $StartDate = date_format(date_create($StartDate), 'Y-m-d');

        $revenue_statistic = $this->revenue_statistic($StartDate, $EndDate);
        $dataDateTotal = $revenue_statistic[0];
        $dataDate = $revenue_statistic[1];
        $sumTotal = $revenue_statistic[2];

        $statuses = [EnumsOrderStatus::CANCELED->value, EnumsOrderStatus::PENDING->value, EnumsOrderStatus::CONFIRMED->value, EnumsOrderStatus::COMPLETED->value];

        $order_status_statistics = $this->order_status_statistics($statuses, $StartDate, $EndDate);

        $orderNumStatus_num = $order_status_statistics[0];
        $orderNumStatus_title = $order_status_statistics[1];
        $orderTotal = $order_status_statistics[2];

        return view('admin.statistics.revenue', compact('path', 'dataDateTotal', 'dataDate', 'sumTotal', 'dateInput', 'orderNumStatus_num', 'orderNumStatus_title', 'orderTotal'));
    }

    public function statistic_get_data(Request $request){
        $path = 'admin.statistics.data';
        $dateInput = $request->FromDateToDate;
        $EndDate = substr($dateInput, strpos($dateInput,' - ') + 3, strlen($dateInput));
        $EndDate = date_format(date_create($EndDate), 'Y-m-d');
        $StartDate = substr($dateInput, 0 , strpos($dateInput,' - '));
        $StartDate = date_format(date_create($StartDate), 'Y-m-d');

        $revenue_statistic = $this->revenue_statistic($StartDate, $EndDate);
        $dataDateTotal = $revenue_statistic[0];
        $dataDate = $revenue_statistic[1];
        $sumTotal = $revenue_statistic[2];

        $statuses = ['CANCELED', 'PENDING', 'CONFIRMED', 'COMPLETED'];

        $order_status_statistics = $this->order_status_statistics($statuses, $StartDate, $EndDate);
        $orderNumStatus_num = $order_status_statistics[0];
        $orderNumStatus_title = $order_status_statistics[1];
        $orderTotal = $order_status_statistics[2];

        return view('admin.statistics.revenue', compact('path', 'dataDateTotal', 'dataDate', 'sumTotal', 'dateInput', 'orderNumStatus_num', 'orderNumStatus_title', 'orderTotal'));
    }

    public function statistic_view_booksSold() {
        $path = 'admin.statistics.booksSold';

        $EndDate = DB::table('orders')->selectRaw("DATE(MAX(created_at)) AS max")->first()->max;
        $StartDate = DB::table('orders')->selectRaw("DATE(MIN(created_at)) AS min")->first()->min;

        $books_sold = $this->books_sold($StartDate, $EndDate);

        $books = $books_sold[0];
        $total = $books_sold[1];

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        if ($EndDate != null && $StartDate != null) {
            $StartDate = date_format(date_create($StartDate), 'd-m-Y');
            $EndDate = date_format(date_create($EndDate), 'd-m-Y');

            $dateInput = $StartDate.' - '.$EndDate;
        } else {
            $dateInput = date('d-m-Y').' - '.date('d-m-Y');
        }

        return view('admin.statistics.books-sold', compact('path', 'books', 'dateInput', 'publishers', 'authors', 'categories', 'total'));
    }

    public function statistic_view_booksSold_get_data(Request $request) {
        $path = 'admin.statistics.booksSold';

        $dateInput = $request->FromDateToDate;
        $EndDate = substr($dateInput, strpos($dateInput,' - ') + 3, strlen($dateInput));
        $EndDate = date_format(date_create($EndDate), 'Y-m-d');
        $StartDate = substr($dateInput, 0 , strpos($dateInput,' - '));
        $StartDate = date_format(date_create($StartDate), 'Y-m-d');

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

        $sqlLike = 'b.created_at is not null';
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

            $sqlLike .= " AND b.price >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND b.price <= ".$max;
            }

            $fillter_price = $request->price;
        } else {
            $fillter_price = null;
        }

        if ($request->quantity != null ) {
            list($min, $max) = explode('-', $request->quantity);

            $sqlLike .= " AND b.quantity >= ".$min;

            if ($max !== "") {
                $sqlLike .= " AND b.quantity <= ".$max;
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

        $sqlHaving = '';
        if ($request->quantity_sold != null) {
            list($min, $max) = explode('-', $request->quantity_sold);


            $sqlHaving .= " AND total_sold >= ".$min;

            if ($max !== "") {
                $sqlHaving .= " AND total_sold <= ".$max;
            }

            $fillter_quantity_sold = $request->quantity_sold;
        } else {
            $fillter_quantity_sold = null;
        }

        $books = DB::table('books as b')
                    ->leftJoin('order_details as od', 'b.id', '=', 'od.book_id')
                    ->leftJoin('orders as o', 'od.order_id', '=', 'o.id')
                    ->leftJoin('classifyings','b.id','=','classifyings.book_id')
                    ->leftJoin('categories','classifyings.category_id','=','categories.id')
                    ->leftJoin('writings', 'b.id', '=', 'writings.book_id')
                    ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                    ->leftJoin('publishers', 'b.publisher_id', '=', 'publishers.id')
                    ->select(
                        'b.id as book_id',
                        'b.title as book_title',
                        'b.image as book_image',
                        'b.quantity as book_quantity_in_stock',
                        'b.deleted_at as book_deleted_at',
                        DB::raw("
                            COALESCE(
                                SUM(
                                    CASE 
                                        WHEN o.status = 'COMPLETED' 
                                        AND DATE(o.created_at) BETWEEN '$StartDate' AND '$EndDate'
                                        THEN od.quantity 
                                        ELSE 0 
                                    END
                                ), 0
                            ) as total_sold
                        ")
                    )
                    ->whereRaw($sqlLike)
                    ->groupBy('b.id', 'b.title', 'b.image', 'b.quantity', 'b.deleted_at')
                    ->orderByDesc('total_sold')->orderBy('b.created_at')
                    ->havingRaw('book_id IS NOT NULL '.$sqlHaving)
                    ->paginate(5)
                    ->appends([
                        'FromDateToDate' => $dateInput, 
                        'price' => $fillter_price, 
                        'category' => $fillter_category, 
                        'publisher' => $fillter_publisher, 
                        'author' => $fillter_author, 
                        'quantity' => $fillter_quantity, 
                        'quantity_sold' => $fillter_quantity_sold,
                        'search' => $search
                    ]);
        
        $total = DB::table(
                DB::table('books as b')
                        ->leftJoin('order_details as od', 'b.id', '=', 'od.book_id')
                        ->leftJoin('orders as o', 'od.order_id', '=', 'o.id')
                        ->leftJoin('classifyings','b.id','=','classifyings.book_id')
                        ->leftJoin('categories','classifyings.category_id','=','categories.id')
                        ->leftJoin('writings', 'b.id', '=', 'writings.book_id')
                        ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                        ->leftJoin('publishers', 'b.publisher_id', '=', 'publishers.id')
                        ->select(
                            'b.id as book_id',
                            'b.title as book_title',
                            'b.image as book_image',
                            'b.quantity as book_quantity_in_stock',
                            'b.deleted_at as book_deleted_at',
                            DB::raw("
                                COALESCE(
                                    SUM(
                                        CASE 
                                            WHEN o.status = 'COMPLETED' 
                                            AND DATE(o.created_at) BETWEEN '$StartDate' AND '$EndDate'
                                            THEN od.quantity 
                                            ELSE 0 
                                        END
                                    ), 0
                                ) as total_sold
                            ")
                        )
                        ->whereRaw($sqlLike)
                        ->groupBy('b.id', 'b.title', 'b.image', 'b.quantity', 'b.deleted_at')
                    )
                    ->selectRaw('SUM(total_sold) as total')
                    ->first();

        $categories = Category::all();

        $authors = Author::all();

        $publishers = Publisher::all();

        return view('admin.statistics.books-sold', compact('path', 'books', 'dateInput', 'search', 'categories', 'authors', 'publishers', 'fillter_price', 'fillter_category', 'fillter_publisher', 'fillter_author', 'fillter_quantity', 'fillter_quantity_sold', 'total'));
    }

    public function showBookSold(Book $book) {
        $path = 'admin.statistics.booksSold';

        $book->load('category');
        $book->load('author');
        $book->load('publisher');

        return view('admin.statistics.show-book-detail', compact('path','book'));
    }

    public function checkBookSold(string $id) {
        $path = 'admin.books.checked';

        $book = Book::onlyTrashed()->whereKey($id)->first();

        $book->load('category');
        $book->load('author');
        $book->load('publisher');

        return view('admin.statistics.check-book-detail', compact('path', 'book'));
    }
    
    private function revenue_statistic($StartDate, $EndDate){
        $a = DB::table('orders')
            ->whereDate('orders.created_at', '>=', $StartDate)
            ->whereDate('orders.created_at', '<=', $EndDate)
            ->where('orders.status', '=', 'COMPLETED');

        $sumTotal = $a->selectRaw('SUM(total) AS total')->first()->total;

        $num = 0;
        $dataDateTotal = [];
        $dataDate = [];
        $date = date_create($StartDate);
        while (date_format($date, 'Y-m-d') <= $EndDate) {
            $num++;
            $total = DB::table(
                DB::table(
                    DB::table('orders')
                        ->selectRaw('*, DATE(`orders`.`created_at`) AS orderDate')
                        ->where('orders.status', '=', 'COMPLETED'), 'a')
                    ->where('a.orderDate', '=', date_format($date, 'Y-m-d')), 'b')
                ->selectRaw('SUM(total) AS total')->first()->total;
            if($total == null){
                $total = 0;
            } else {
                $total = number_format($total,0,',','.');
            }
            $dataDateTotal[] = [$num, $total];
            $dataDate[] = [$num, date_format($date, 'd-m-Y')];
            $date = date_add($date, date_interval_create_from_date_string('1 day'));
        }

        return [$dataDateTotal, $dataDate, $sumTotal];
    }

    private function order_status_statistics($statuses, $StartDate, $EndDate) {
        $orderNumStatus = collect($statuses)->map(function ($status) use ($StartDate, $EndDate) {
            $count = DB::table('orders')
                ->where('status', $status)
                ->whereDate('created_at','>=', $StartDate)
                ->whereDate('created_at','<=', $EndDate)
                ->count();

            return [
                'status' => $status,
                'total_orders' => $count,
            ];
        });

        $orderNumStatus_num = [];
        $orderNumStatus_title = [];

        foreach ($orderNumStatus as $key => $value) {
            $orderNumStatus_num[] = [$key+1, $value['total_orders']];
            $orderNumStatus_title[] = [$key+1, $value['status'].': '.$value['total_orders']];
        }

        $orderTotal = DB::table('orders')
            ->whereDate('created_at','>=', $StartDate)
            ->whereDate('created_at','<=', $EndDate)
            ->count();
        
        return [$orderNumStatus_num, $orderNumStatus_title, $orderTotal];
    }

    private function books_sold($startDate, $endDate) {
        $statistics = DB::table('books as b')
                        ->leftJoin('order_details as od', 'b.id', '=', 'od.book_id')
                        ->leftJoin('orders as o', 'od.order_id', '=', 'o.id')
                        ->leftJoin('classifyings','b.id','=','classifyings.book_id')
                        ->leftJoin('categories','classifyings.category_id','=','categories.id')
                        ->leftJoin('writings', 'b.id', '=', 'writings.book_id')
                        ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                        ->leftJoin('publishers', 'b.publisher_id', '=', 'publishers.id')
                        ->select(
                            'b.id as book_id',
                            'b.title as book_title',
                            'b.image as book_image',
                            'b.quantity as book_quantity_in_stock',
                            'b.deleted_at as book_deleted_at',
                            DB::raw("
                                COALESCE(
                                    SUM(
                                        CASE 
                                            WHEN o.status = 'COMPLETED' 
                                            AND DATE(o.created_at) BETWEEN '$startDate' AND '$endDate'
                                            THEN od.quantity 
                                            ELSE 0 
                                        END
                                    ), 0
                                ) as total_sold
                            ")
                        )
                        ->groupBy('b.id', 'b.title', 'b.image', 'b.quantity', 'b.deleted_at')
                        ->orderByDesc('total_sold')->orderBy('b.created_at')
                        ->paginate(5);

        $total = DB::table(DB::table('books as b')
                        ->leftJoin('order_details as od', 'b.id', '=', 'od.book_id')
                        ->leftJoin('orders as o', 'od.order_id', '=', 'o.id')
                        ->leftJoin('classifyings','b.id','=','classifyings.book_id')
                        ->leftJoin('categories','classifyings.category_id','=','categories.id')
                        ->leftJoin('writings', 'b.id', '=', 'writings.book_id')
                        ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                        ->leftJoin('publishers', 'b.publisher_id', '=', 'publishers.id')
                        ->select(
                            'b.id as book_id',
                            'b.title as book_title',
                            'b.image as book_image',
                            'b.quantity as book_quantity_in_stock',
                            'b.deleted_at as book_deleted_at',
                            DB::raw("
                                COALESCE(
                                    SUM(
                                        CASE 
                                            WHEN o.status = 'COMPLETED' 
                                            AND DATE(o.created_at) BETWEEN '$startDate' AND '$endDate'
                                            THEN od.quantity 
                                            ELSE 0 
                                        END
                                    ), 0
                                ) as total_sold
                            ")
                        )
                        ->groupBy('b.id', 'b.title', 'b.image', 'b.quantity', 'b.deleted_at'))
                        ->selectRaw('SUM(total_sold) as total')->first();

        return [$statistics, $total];
    }

    private function books_sold_have_date($startDate, $endDate, $dateInput) {
        $statistics = DB::table('books as b')
                        ->leftJoin('order_details as od', 'b.id', '=', 'od.book_id')
                        ->leftJoin('orders as o', 'od.order_id', '=', 'o.id')
                        ->leftJoin('classifyings','books.id','=','classifyings.book_id')
                        ->leftJoin('categories','classifyings.category_id','=','categories.id')
                        ->leftJoin('writings', 'books.id', '=', 'writings.book_id')
                        ->leftJoin('authors', 'writings.author_id', '=', 'authors.id')
                        ->leftJoin('publishers', 'books.publisher_id', '=', 'publishers.id')
                        ->select(
                            'b.id as book_id',
                            'b.title as book_title',
                            'b.image as book_image',
                            'b.quantity as book_quantity_in_stock',
                            'b.deleted_at as book_deleted_at',
                            DB::raw("
                                COALESCE(
                                    SUM(
                                        CASE 
                                            WHEN o.status = 'COMPLETED' 
                                            AND DATE(o.created_at) BETWEEN '$startDate' AND '$endDate'
                                            THEN od.quantity 
                                            ELSE 0 
                                        END
                                    ), 0
                                ) as total_sold
                            ")
                        )
                        ->groupBy('b.id', 'b.title', 'b.image', 'b.quantity', 'b.deleted_at')
                        ->orderByDesc('total_sold')->orderBy('b.created_at')
                        ->paginate(5)->appends(['FromDateToDate' => $dateInput]);
        
        return $statistics;
    }
}
