<?php

namespace App\Http\Controllers\Site\PcCat;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $product = Product::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $product = Product::all();
        }

        return view('site.pccat', compact('product', 'query'));
    }
}
