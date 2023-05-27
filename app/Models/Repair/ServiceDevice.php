<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'model_brand_id'
    ];
}
