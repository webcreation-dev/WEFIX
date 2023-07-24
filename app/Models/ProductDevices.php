<?php

namespace App\Models;

use App\Models\Ecommerce\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDevices extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
