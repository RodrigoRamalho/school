<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseMedia extends Model
{
    protected $table = '';

    protected $fillable = [
    	'exercise_id',
    	'media_id'
    ]
}
