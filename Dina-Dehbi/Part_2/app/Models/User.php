<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // User can have many hikes
    public function hikes() {
        return $this->hasMany(Hike::class);
    }

    // User can have many reviews
    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
