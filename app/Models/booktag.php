<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booktag extends Model
{
    use HasFactory;
    protected $table = 'book_tag';
    protected $fillable = [
        'book_id',
         'tag_id'

    ];
}
