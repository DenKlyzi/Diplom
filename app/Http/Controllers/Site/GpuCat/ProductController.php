<?php

namespace App\Http\Controllers\Site\GpuCat;

use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;

class ProductController extends Controller
{
    public function getProduct($gpu_id)
    {
        $gpusCatalog = GpuCatalog::where('id', $gpu_id)->first();
        return view('site.gpuprod', compact('gpusCatalog'));
    }
}
