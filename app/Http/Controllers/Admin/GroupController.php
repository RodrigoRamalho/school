<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use Illuminate\Database\Eloquent\Model;

class GroupController extends Controller
{
    protected static $title = 'Group';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Group();
    }
}
