<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Author extends Model
{
    use HasFactory;

    public function books(){
        return $this->hasMany(Books::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Awards(){
        return $this->hasMany(Award::class);
    }
}
