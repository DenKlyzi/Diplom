<?php

namespace App\Http\Controllers\MonitorCatalogs;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(MonitorCatalog $monitors)
    {
        return view("monitors.show", compact("monitors"));
    }
}
