<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutlipleChoice extends Model
{
    protected $table = 'mutliple_choices';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'choices',
    	'correction'
    ]
}
