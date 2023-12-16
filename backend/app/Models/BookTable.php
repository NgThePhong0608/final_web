<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTable extends Model
{
    use HasFactory;
    protected $table = 'book_table';

    protected $fillable = [
        'book_name',
        'book_phone',
        'book_people',
        'book_tables',
        'book_when',
        'book_note',
        'user_id',
    ];
}
