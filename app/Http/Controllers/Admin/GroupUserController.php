<?php

namespace App\Http\Controllers\Admin;

use App\GroupUser;
use Illuminate\Database\Eloquent\Model;

class GroupUserController extends Controller
{
    protected static $title = 'GroupUser';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new GroupUser();
    }
}
