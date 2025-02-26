<?php

namespace App\Http\Controllers\RamCatalogs;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $ramcatalog = RamCatalog::all();
        return view("rams.index", compact("ramcatalog"));
    }
}
