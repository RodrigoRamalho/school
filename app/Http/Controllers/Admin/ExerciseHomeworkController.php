<?php

namespace App\Http\Controllers\Admin;

use App\ExerciseHomework;
use Illuminate\Database\Eloquent\Model;

class ExerciseHomeworkController extends Controller
{
    protected static $title = 'ExerciseHomework';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new ExerciseHomework();
    }
}
