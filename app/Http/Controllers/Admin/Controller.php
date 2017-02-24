<?php

namespace App\Http\Controllers\Admin;

use Lrcurso\Admin\Controllers\AdminCrud;
use Lrcurso\Admin\Controllers\LinkableContract;
use Lrcurso\Admin\Controllers\LinkableTrait;

abstract class Controller implements LinkableContract
{
    use AdminCrud, LinkableTrait;
}
