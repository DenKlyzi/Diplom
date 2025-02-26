<?php

namespace App\Http\Controllers\Site\MonitorCat;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;

class ProductController extends Controller
{
    public function getProduct($monitor_id)
    {
        $monitorsCatalog = MonitorCatalog::where('id', $monitor_id)->first();
        return view('site.monitorprod', compact('monitorsCatalog'));
    }
}
