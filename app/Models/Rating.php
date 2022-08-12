<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function books(){
        return $this->belongsToMany(Books::class,'book_ratings','rating_id','book_id');
    }

    public function User(){
        return $this->belongsTo(Rating::class);
    }
}
