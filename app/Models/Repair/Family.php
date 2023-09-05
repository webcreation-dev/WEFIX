<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    public function modelBrand()
    {
        return $this->hasMany(ModelBrand::class);
    }
}
