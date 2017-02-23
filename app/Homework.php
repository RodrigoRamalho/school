<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homework extends Model
{
    use SoftDeletes;

    protected $table = 'homeworks';

    protected $fillable = [
        'group_id',
    ];
}
