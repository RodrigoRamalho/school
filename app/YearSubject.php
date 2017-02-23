<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YearSubject extends Model
{
    use SoftDeletes;
    
    protected $table = 'year_subjects';

    protected $fillable = [
    	'name'
    ];
}
