<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $table = 'exercises';

    protected $fillable = [
    	'theme_id',
    	'type_id',
    	'user_id',
    	'name',
    	'source',
    	'statement'
    ]
}
