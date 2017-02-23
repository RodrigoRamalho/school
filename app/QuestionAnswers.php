<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswers extends Model
{
    protected $table = 'questions_answers';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'correction'
    ]
}
