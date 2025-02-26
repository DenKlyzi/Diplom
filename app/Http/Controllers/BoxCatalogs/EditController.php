<?php

namespace App\Http\Controllers\BoxCatalogs;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(BoxCatalog $boxes)
    {
        $categories = Category::all();
        return view('boxes.edit', compact('boxes', 'categories'));
    }
}
