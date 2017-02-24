<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Database\Eloquent\Model;

class RoleController extends Controller
{
    protected static $title = 'Role';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Role();
    }
}
