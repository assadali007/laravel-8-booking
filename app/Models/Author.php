<?php

namespace App\Models;

use App\Models\eloquent\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{

    use HasFactory;
    protected $fillable = [
        'first_name',
          'last_name'
    ];

    public function books()
    {
        return $this->hasMany(Book::class,'author_id','id');
    }
    public function book()
    {
        return $this->hasOne(Book::class,'author_id','id');
    }
}
