<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writing extends Model
{
    /** @use HasFactory<\Database\Factories\WritingFactory> */
    protected $fillable = [
        'book_id',
        'author_id',
    ];
    
    public $timestamps = false;

    use HasFactory;

    public function author() {
        return $this->belongsTo(Author::class);
    }
}
