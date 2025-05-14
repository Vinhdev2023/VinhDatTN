<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'address',
        'phone',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts() {
        return [
            'password' => 'hashed',
        ];
    }

    use HasFactory;
}
