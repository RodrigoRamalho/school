<?php

namespace App\Http\Controllers\Admin;

use App\InstitutionUser;
use Illuminate\Database\Eloquent\Model;

class InstitutionUserController extends Controller
{
    protected static $title = 'InstitutionUser';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new InstitutionUser();
    }
}
