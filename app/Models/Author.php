<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    protected $fillable = [
        'name',
    ];

    // protected $table = 'author';

    public function writing() {
        return $this->hasMany(Writing::class);
    }

    use HasFactory;
}
