<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    protected $fillable = [
        'name',
    ];

    use HasFactory;

    public function classifying() {
        return $this->hasMany(Classifying::class);
    }
}
