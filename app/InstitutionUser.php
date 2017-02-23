<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InstitutionUser extends Model
{
    use SoftDeletes;

    protected $table = 'institution_user';

    protected $fillable = [
        'institution_id',
        'user_id',
    ];
}
