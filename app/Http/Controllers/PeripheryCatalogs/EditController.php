<?php

namespace App\Http\Controllers\PeripheryCatalogs;
use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(PeripheryCatalog $peripherys)
    {
        $categories = Category::all();
        return view('peripherys.edit', compact('peripherys', 'categories'));
    }
}
