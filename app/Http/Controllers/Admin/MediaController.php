<?php

namespace App\Http\Controllers\Admin;

use App\Media;
use Illuminate\Database\Eloquent\Model;

class MediaController extends Controller
{
    protected static $title = 'Media';
    protected static $icon_class = 'fa fa-icon';

    public function getModel(): Model
    {
    	return new Media();
    }
}
