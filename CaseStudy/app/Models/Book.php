<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    public function authors(){
        return $this->belongsTo(Author::class,'authorID');
    }

    public function categories(){
        return $this->belongsTo(Category::class,'categoryID');
    }

    public function publishers(){
        return $this->belongsTo(Publisher::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }
}
