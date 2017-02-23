<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentwork extends Model
{
    protected $table = 'studentworks';

    protected $fillable = [
    	'homework_id',
    	'user_id',
    	'time_spent',
    	'work_date',
    	'right_percentage',
    	'counter',
    	'percentage_counter',
    	'status'
    ]
}
