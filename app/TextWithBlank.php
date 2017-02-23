<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TextWithBlank extends Model
{
    use SoftDeletes;
    
    protected $table = 'texts_with_blanks';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'correction'
    ];
}
