<?php

namespace App\Http\Controllers\Site\CpuCat;

use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;

class ProductController extends Controller
{
    public function getProduct($cpu_id)
    {
        $cpusCatalog = CpuCatalog::where('id', $cpu_id)->first();
        return view('site.cpuprod', compact('cpusCatalog'));
    }
}
