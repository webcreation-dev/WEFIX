<?php

namespace App\Models\Repair;

use App\Models\Selling\StepSelling;
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

    public function stepSellings()
    {
        return $this->belongsToMany(StepSelling::class, 'merge_model_step_sellings')->withPivot('order');
    }
}
