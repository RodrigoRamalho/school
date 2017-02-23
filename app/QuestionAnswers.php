<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionAnswers extends Model
{
    use SoftDeletes;
    
    protected $table = 'questions_answers';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'correction'
    ];
}
