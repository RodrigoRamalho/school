<?php

namespace App\Http\Controllers\Admin;

use App\Link;
use Illuminate\Database\Eloquent\Model;

class LinkController extends Controller
{
    protected static $title = 'Link';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Link();
    }
}
