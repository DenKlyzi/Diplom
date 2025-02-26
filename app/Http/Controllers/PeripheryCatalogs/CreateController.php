<?php

namespace App\Http\Controllers\PeripheryCatalogs;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view("peripherys.create", compact("categories"));
    }
}
