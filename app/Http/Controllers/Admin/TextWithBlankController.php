<?php

namespace App\Http\Controllers\Admin;

use App\TextWithBlank;
use Illuminate\Database\Eloquent\Model;

class TextWithBlankController extends Controller
{
    protected static $title = 'TextWithBlank';
    protected static $icon_class = 'fa fa-book';

    public function getModel(): Model
    {
    	return new TextWithBlank();
    }
}
