<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(Product $products)
    {
        $categories = Category::all();
        return view('products.edit', compact('products', 'categories'));
    }
}
