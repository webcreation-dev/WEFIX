<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeFailureAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'failure_device_id',
        'failure_attribute_id',
    ];
}
