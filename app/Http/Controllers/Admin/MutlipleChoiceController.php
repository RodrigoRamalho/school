<?php

namespace App\Http\Controllers\Admin;

use App\MutlipleChoice;
use Illuminate\Database\Eloquent\Model;

class MutlipleChoiceController extends Controller
{
    protected static $title = 'MutlipleChoice';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new MutlipleChoice();
    }
}
