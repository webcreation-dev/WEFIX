<?php

namespace App\Models\Selling;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionStepSelling extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function stepSellings()
    {
        return $this->belongsToMany(StepSelling::class, 'merge_question_step_sellings');
    }
}
