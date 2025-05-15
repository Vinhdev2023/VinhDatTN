<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /** @use HasFactory<\Database\Factories\OrderDetailFactory> */
    protected $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'price',
    ];
    
    public $timestamps = false;

    public function Order() {
        return [
            $this->belongsTo(Order::class),
        ];
    }

    use HasFactory;
}
