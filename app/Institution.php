<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
	use SoftDeletes;
    
    protected $table = 'institutions';

    protected $fillable = [
    	'name'
    ];
}
