<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseHomework extends Model
{
    protected $table = 'exercise_homeworks';

    protected $fillable = [
    	'exercise_id',
    	'homework_id'
    ]
}
