<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillStatus extends Model
{
    use HasFactory;

    protected $table = 'bill_status';

    protected $fillable = [
        'user_id',
        'bill_phone',
        'bill_address',
        'bill_when',
        'bill_method',
        'bill_discount',
        'bill_delivery',
        'bill_total',
        'bill_paid',
        'bill_status'
    ];
}
