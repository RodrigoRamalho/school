<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercise extends Model
{
    use SoftDeletes;

    protected $table = 'exercises';

    protected $fillable = [
        'theme_id',
        'type_id',
        'user_id',
        'name',
        'source',
        'statement',
    ];
}
