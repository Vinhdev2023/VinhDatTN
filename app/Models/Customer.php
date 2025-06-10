<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
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

    public function order() {
        return $this->hasMany(Order::class);
    }

    use HasFactory, SoftDeletes, Notifiable;
}
