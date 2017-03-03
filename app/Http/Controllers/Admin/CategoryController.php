<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    protected static $title = 'Categoria';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new Category();
    }
}
