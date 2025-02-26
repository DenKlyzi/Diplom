<?php

namespace App\Http\Controllers\GpuCatalogs;

use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $gpucatalog = GpuCatalog::all();
        return view("gpus.index", compact("gpucatalog"));
    }
}
