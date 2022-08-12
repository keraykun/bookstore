<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function price(){
        return $this->belongsTo(Price::class,'id','book_id');
    }

    public function rating(){
        return $this->hasMany(Rating::class,'book_id');
    }


    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function detail(){
        return $this->belongsTo(Book_details::class,'id','book_id');
    }

    public function genres(){
        return $this->belongsToMany(Genre::class,'book_genres','book_id','genre_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'book_id');
    }

    public function languages(){
        return $this->belongsToMany(Language::class,'book_languages','book_id','language_id')->withTimestamps();
    }

}
