<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeProductAttributeName extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'attribute_name_id',
        'price',
        'reduction_price'
    ];

}
