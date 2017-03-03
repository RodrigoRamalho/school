<?php

namespace App\Http\Controllers\Admin;

use App\Institution;
use Illuminate\Database\Eloquent\Model;

class InstitutionController extends Controller
{
    protected static $title = 'Institution';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Institution();
    }
}
