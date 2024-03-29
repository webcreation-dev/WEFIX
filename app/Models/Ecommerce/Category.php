<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'product_device'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories');
    }
}
