<?php

namespace App\Models\Ecommerce;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'nalme',
    ];

    public function attributesName()
    {
        return $this->hasMany(AttributeName::class);
    }
}
