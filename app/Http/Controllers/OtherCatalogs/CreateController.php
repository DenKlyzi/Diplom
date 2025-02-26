<?php

namespace App\Http\Controllers\OtherCatalogs;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view("others.create", compact("categories"));
    }
}
