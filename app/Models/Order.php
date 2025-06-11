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

    public function book() {
        return $this->belongsToMany(Book::class, 'order_details');
    }

    public function admin() {
        return $this->belongsTo(Admin::class,'admin_id_confirmed');
    }

    use HasFactory;
}
