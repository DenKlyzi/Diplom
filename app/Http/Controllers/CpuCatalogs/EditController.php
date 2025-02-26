<?php

namespace App\Http\Controllers\CpuCatalogs;

use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(CpuCatalog $cpus)
    {
        $categories = Category::all();
        return view('cpus.edit', compact('cpus', 'categories'));
    }
}
