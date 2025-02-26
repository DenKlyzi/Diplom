<?php

namespace App\Http\Controllers\BoxCatalogs;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $boxcatalog = BoxCatalog::all();
        return view("boxes.index", compact("boxcatalog"));
    }
}
