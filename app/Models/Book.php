<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    protected $fillable = [
        'isbn_code',
        'title',
        'image',
        'quantity',
        'price',
        'description',
        'publisher_id',
    ];

    use HasFactory, SoftDeletes;

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }
}
