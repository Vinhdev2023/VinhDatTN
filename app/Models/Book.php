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

    public function category() {
        return $this->belongsToMany(Category::class, 'classifyings', 'book_id', 'category_id');
    }

    public function author() {
        return $this->belongsToMany(Author::class, 'writings', 'book_id', 'author_id');
    }

    public function orderDetail() {
        return $this->hasMany(OrderDetail::class);
    }

    public function classifying() {
        return $this->hasMany(Classifying::class);
    }

    public function writing() {
        return $this->hasMany(Writing::class);
    }
}
