<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Studentwork extends Model
{
    use SoftDeletes;

    protected $table = 'studentworks';

    protected $fillable = [
        'homework_id',
        'user_id',
        'time_spent',
        'work_date',
        'right_percentage',
        'counter',
        'percentage_counter',
        'status',
    ];
}
