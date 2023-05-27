<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'address',
        'zip_code',
    ];
}
