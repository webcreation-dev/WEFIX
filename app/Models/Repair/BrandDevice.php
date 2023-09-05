<?php

namespace App\Models\Repair;

use App\Models\Repair\Family;
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

    public function familyBrand()
    {
        return $this->hasMany(Family::class);
    }



}
