<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeName extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'attribute_id'
    ];
}
