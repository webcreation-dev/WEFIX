<?php

namespace App\Models\Selling;

use App\Models\Repair\ModelBrand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeModelStepSelling extends Model
{
    use HasFactory;

    protected $fillable = [
        'step_selling_id',
        'model_brand_id'
    ];

    public function modelBrand()
    {
        return $this->belongsTo(ModelBrand::class);
    }

    public function stepSelling()
    {
        return $this->belongsTo(StepSelling::class);
    }
}
