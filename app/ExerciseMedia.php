<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExerciseMedia extends Model
{
    use SoftDeletes;

    protected $table = '';

    protected $fillable = [
        'exercise_id',
        'media_id',
    ];
}
