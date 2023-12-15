<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'foods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'food_name',
        'food_star',
        'food_vote',
        'food_price',
        'food_discount',
        'food_desc',
        'food_status',
        'food_type',
        'food_category',
        'food_src',
    ];
}
