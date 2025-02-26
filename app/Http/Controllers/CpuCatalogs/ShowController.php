<?php

namespace App\Http\Controllers\CpuCatalogs;

use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(CpuCatalog $cpus)
    {
        return view("cpus.show", compact("cpus"));
    }
}
