<?php

namespace App\Http\Controllers\Site\Layouts;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view("site.index");
    }
}
