<?php

namespace App\Http\Controllers\OtherCatalogs;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $othercatalog = OtherCatalog::all();
        return view("others.index", compact("othercatalog"));
    }
}
