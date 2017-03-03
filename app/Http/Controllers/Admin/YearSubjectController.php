<?php

namespace App\Http\Controllers\Admin;

use App\YearSubject;
use Illuminate\Database\Eloquent\Model;

class YearSubjectController extends Controller
{
    protected static $title = 'YearSubject';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new YearSubject();
    }
}
