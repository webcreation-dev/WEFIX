<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'apartment',
        'city',
        'country',
        'zip_code',
        'phone',
        'total_amount',
        'order_status',
        'payment_status',
        'payment_id',

    ];


}
