<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExerciseHomework extends Model
{
    use SoftDeletes;

    protected $table = 'exercise_homeworks';

    protected $fillable = [
        'exercise_id',
        'homework_id',
    ];
}
