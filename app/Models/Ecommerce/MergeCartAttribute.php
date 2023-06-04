<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeCartAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'attribute_name_id'
    ];
}
