<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    protected $fillable = [
        'admin_id_confirmed',
        'customer_id',
        'customer_name',
        'customer_phone',
        'ship_to_address',
        'total',
        'status',
    ];

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class);
    }

    // public function numBook() {
    //     return $this->orderDetails()->where('quantity','>',0);
    // }

    use HasFactory;
}
