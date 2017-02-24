<?php

namespace App\Http\Controllers\Admin;

use App\Intitution;
use Illuminate\Database\Eloquent\Model;

class IntitutionController extends Controller
{
    protected static $title = 'Intitution';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Intitution();
    }
}
