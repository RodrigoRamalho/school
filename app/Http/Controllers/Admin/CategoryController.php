<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    protected static $title = 'Category';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Category();
    }
}
