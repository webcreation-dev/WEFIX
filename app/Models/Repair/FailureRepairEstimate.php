<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailureRepairEstimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'failure_device_id',
        'repair_estimate_id',
    ];
}
