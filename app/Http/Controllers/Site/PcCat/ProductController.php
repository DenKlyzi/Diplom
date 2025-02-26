<?php

namespace App\Http\Controllers\Site\PcCat;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct($pc_id)
    {
        $products = Product::where('id', $pc_id)->first();
        return view('site.pcprod', compact('products'));
    }
}
