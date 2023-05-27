<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'brand_device_id',
    ];

    public function failureDevices()
    {
        return $this->belongsToMany(FailureDevice::class, 'merge_model_failures');
    }

    public function brandDevice()
    {
        return $this->belongsTo(BrandDevice::class);
    }
}
