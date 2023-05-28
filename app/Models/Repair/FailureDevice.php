<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailureDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'reduction_price',
        'reduction',
        'rdv_online',
        'code'
    ];

    public function modelBrands()
    {
        return $this->belongsToMany(ModelBrand::class, 'merge_model_failures');
    }

    public function failureAttributes()
    {
        return $this->belongsToMany(FailureAttribute::class, 'merge_failure_attributes');
    }
}
