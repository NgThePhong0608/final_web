<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    use HasFactory;
    protected $table = 'bill_details';
    protected $fillable = [
        'id',
        'food_id',
        'quantity',
    ];
}
