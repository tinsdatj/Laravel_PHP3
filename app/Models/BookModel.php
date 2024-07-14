<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        '       title' ,
                'thumbnail',
                'author',
                'publisher',
                'publication',
                'price',
                'quality',
                'category_id',
    ];
}
