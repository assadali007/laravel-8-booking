<?php

namespace App\Models;

use App\Models\eloquent\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function books()
    {
        return $this->hasMany(Book::class,'publisher_id','id');
    }
}
