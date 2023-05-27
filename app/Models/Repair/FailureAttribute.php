<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FailureAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
    ];
}
