<?php

namespace App\Http\Controllers\RamCatalogs;
use App\Models\Category;
use App\Models\RamCatalog;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view("rams.create", compact("categories"));
    }
}
