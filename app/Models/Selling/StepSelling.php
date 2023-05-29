<?php

namespace App\Models\Selling;

use App\Models\Repair\ModelBrand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StepSelling extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description'
    ];

    public function modelBrands()
    {
        return $this->belongsToMany(ModelBrand::class, 'merge_model_step_sellings')->withPivot('order');
    }

    public function questionStepSellings()
    {
        return $this->belongsToMany(QuestionStepSelling::class, 'merge_question_step_sellings');
    }
}
