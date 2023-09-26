<?php

namespace App\Models\Repair;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeModelFailure extends Model
{
    use HasFactory;

    protected $fillable = [
        'failure_device_id',
        'model_brand_id',
    ];

    public static function getFailurePrice( $failureId, $modelId ) {
        $failurePrice = MergeModelFailure::where('failure_device_id', $failureId)
            ->where('model_brand_id', $modelId)
            ->first();

        return $failurePrice->price;
    }
}
