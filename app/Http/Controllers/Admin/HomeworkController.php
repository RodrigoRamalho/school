<?php

namespace App\Http\Controllers\Admin;

use App\Homework;
use Illuminate\Database\Eloquent\Model;

class HomeworkController extends Controller
{
    protected static $title = 'Homework';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Homework();
    }
}
