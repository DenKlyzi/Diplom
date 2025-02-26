<?php

namespace App\Http\Controllers\CpuCatalogs;

use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cpucatalog = CpuCatalog::all();
        return view("cpus.index", compact("cpucatalog"));
    }
}
