<?php

namespace App\Http\Controllers\Admin;

use App\QuestionAnswers;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswersController extends Controller
{
    protected static $title = 'QuestionAnswers';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new QuestionAnswers();
    }
}
