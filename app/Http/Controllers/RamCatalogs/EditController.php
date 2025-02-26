<?php

namespace App\Http\Controllers\RamCatalogs;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(RamCatalog $rams)
    {
        $categories = Category::all();
        return view('rams.edit', compact('rams', 'categories'));
    }
}
