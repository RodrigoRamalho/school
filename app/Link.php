<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $fillable = [
    	'category_id',
    	'theme_id',
    	'user_id',
    	'link'
    ]
}
