<?php

namespace App\Http\Controllers\Admin;

use App\Studentwork;
use Illuminate\Database\Eloquent\Model;

class StudentworkController extends Controller
{
    protected static $title = 'Studentwork';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Studentwork();
    }
}
