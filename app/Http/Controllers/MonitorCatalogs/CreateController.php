<?php

namespace App\Http\Controllers\MonitorCatalogs;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view("monitors.create", compact("categories"));
    }
}
