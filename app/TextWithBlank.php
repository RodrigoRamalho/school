<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TextWithBlank extends Model
{
    protected $table = 'texts_with_blanks';

    protected $fillable = [
    	'exercise_id',
    	'question',
    	'correction'
    ]
}
