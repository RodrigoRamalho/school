<?php

namespace App\Http\Controllers\Admin;

use App\Exercise;
use Illuminate\Database\Eloquent\Model;

class ExerciseController extends Controller
{
    protected static $title = 'Exercise';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Exercise();
    }
}
