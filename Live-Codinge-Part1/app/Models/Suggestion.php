<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    // public function reviews() {
    //     $this->belongsTo(Review::class);
    // }








        public function reviews(){
            return $this->belongsTo(Review::class);
        }







}
