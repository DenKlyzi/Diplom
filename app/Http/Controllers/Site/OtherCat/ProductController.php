<?php

namespace App\Http\Controllers\Site\OtherCat;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;

class ProductController extends Controller
{
    public function getProduct($other_id)
    {
        $othersCatalog = OtherCatalog::where('id', $other_id)->first();
        return view('site.otherprod', compact('othersCatalog'));
    }
}
