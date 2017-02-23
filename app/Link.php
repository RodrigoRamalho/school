<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use SoftDeletes;
    
    protected $table = 'links';

    protected $fillable = [
    	'category_id',
    	'theme_id',
    	'user_id',
    	'link'
    ];
}
