<?php

namespace App\Http\Controllers\OtherCatalogs;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(OtherCatalog $others)
    {
        $categories = Category::all();
        return view('others.edit', compact('others', 'categories'));
    }
}
