<?php

namespace App\Http\Controllers\Site\PeripheryCat;

use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;

class ProductController extends Controller
{
    public function getProduct($periphery_id)
    {
        $peripherysCatalog = PeripheryCatalog::where('id', $periphery_id)->first();
        return view('site.peripheryprod', compact('peripherysCatalog'));
    }
}
