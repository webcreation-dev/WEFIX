<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'type_device_id'
    ];

    public function modelBrand()
    {
        return $this->hasMany(ModelBrand::class);
    }



}
