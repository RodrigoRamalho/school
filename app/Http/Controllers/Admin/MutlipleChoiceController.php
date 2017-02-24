<?php

namespace App\Http\Controllers\Admin;

use App\MutlipeChoice;
use Illuminate\Database\Eloquent\Model;

class MutlipeChoiceController extends Controller
{
    protected static $title = 'MutlipeChoice';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new MutlipeChoice();
    }
}
