<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheduleStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_device_id',
        'day',
        'hour_open',
        'hour_close',
    ];
}
