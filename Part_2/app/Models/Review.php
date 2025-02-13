<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'content', 
        'views', 
        'hike_id', 
        'user_id',
    ];

    // Relationship with the User model (one-to-many)
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relationship with the Hike model (one-to-many)
    public function hike() {
        return $this->belongsTo(Hike::class);
    }

    // Relationship with the Suggestion model (one-to-many)
    public function suggestions()
{
    return $this->hasMany(Suggestion::class);
}

}
