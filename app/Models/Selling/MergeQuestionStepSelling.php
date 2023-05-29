<?php

namespace App\Models\Selling;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MergeQuestionStepSelling extends Model
{
    use HasFactory;

    protected $fillable = [
        'step_selling_id',
        'question_step_selling_id'
    ];
}
