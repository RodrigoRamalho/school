<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupUser extends Model
{
    use SoftDeletes;

    protected $table = 'group_user';

    protected $fillable = [
        'group_id',
        'user_id',
    ];
}
