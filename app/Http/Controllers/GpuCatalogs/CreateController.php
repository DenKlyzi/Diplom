<?php

namespace App\Http\Controllers\GpuCatalogs;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view("gpus.create", compact("categories"));
    }
}
