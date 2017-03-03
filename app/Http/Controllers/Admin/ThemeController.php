<?php

namespace App\Http\Controllers\Admin;

use App\Theme;
use Illuminate\Database\Eloquent\Model;

class ThemeController extends Controller
{
    protected static $title = 'Theme';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Theme();
    }
}
