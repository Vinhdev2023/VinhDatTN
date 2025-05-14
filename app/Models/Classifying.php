<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifying extends Model
{
    /** @use HasFactory<\Database\Factories\ClassifyingFactory> */
    protected $fillable = [
        'book_id',
        'category_id',
    ];

    public $timestamps = false;

    use HasFactory;


}
