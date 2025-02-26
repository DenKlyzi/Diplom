<?php

namespace App\Http\Controllers\PeripheryCatalogs;

use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $peripherycatalog = PeripheryCatalog::all();
        return view("peripherys.index", compact("peripherycatalog"));
    }
}
