<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairEstimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_device_id',
        'brand_device_id',
        'model_brand_id',
        'store_device_id',
        'shedule_store_id',
        'hour_coming',
        'gender',
        'last_name',
        'first_name',
        'email',
        'phone',
        'zip_code',
    ];
}
