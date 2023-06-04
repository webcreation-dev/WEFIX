<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeOrderItemAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_item_id',
        'attribute_name_id'
    ];
}
