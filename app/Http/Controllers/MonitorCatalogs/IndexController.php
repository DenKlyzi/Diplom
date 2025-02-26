<?php

namespace App\Http\Controllers\MonitorCatalogs;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $monitorcatalog = MonitorCatalog::all();
        return view("monitors.index", compact("monitorcatalog"));
    }
}
