<?php

namespace App\Http\Controllers\Site\BoxCat;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;

class ProductController extends Controller
{
    public function getProduct($box_id)
    {
        $boxesCatalog = BoxCatalog::where('id', $box_id)->first();
        return view('site.boxprod', compact('boxesCatalog'));
    }
}
