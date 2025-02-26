<?php

namespace App\Http\Controllers\Site\RamCat;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;

class ProductController extends Controller
{
    public function getProduct($ram_id)
    {
        $ramsCatalog = RamCatalog::where('id', $ram_id)->first();
        return view('site.ramprod', compact('ramsCatalog'));
    }
}
