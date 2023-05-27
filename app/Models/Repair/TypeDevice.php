<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDevice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
    ];

    public function brandDevices()
    {
        return $this->hasMany(BrandDevice::class);
    }
}
