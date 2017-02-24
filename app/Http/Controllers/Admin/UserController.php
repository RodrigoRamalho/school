<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    protected static $title = 'User';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new User();
    }
}
