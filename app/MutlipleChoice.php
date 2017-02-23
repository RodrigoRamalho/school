<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MutlipleChoice extends Model
{
    use SoftDeletes;
    
    protected $table = 'mutliple_choices';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'choices',
    	'correction'
    ];
}
