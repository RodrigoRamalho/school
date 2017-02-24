<?php

namespace App\Http\Controllers\Admin;

use App\IntitutionUser;
use Illuminate\Database\Eloquent\Model;

class IntitutionUserController extends Controller
{
    protected static $title = 'IntitutionUser';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new IntitutionUser();
    }
}
