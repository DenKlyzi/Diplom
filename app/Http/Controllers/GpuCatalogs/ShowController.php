<?php

namespace App\Http\Controllers\GpuCatalogs;

use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(GpuCatalog $gpus)
    {
        return view("gpus.show", compact("gpus"));
    }
}
