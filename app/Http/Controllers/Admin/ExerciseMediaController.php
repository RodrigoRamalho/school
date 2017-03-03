<?php

namespace App\Http\Controllers\Admin;

use App\ExerciseMedia;
use Illuminate\Database\Eloquent\Model;

class ExerciseMediaController extends Controller
{
    protected static $title = 'ExerciseMedia';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new ExerciseMedia();
    }
}
