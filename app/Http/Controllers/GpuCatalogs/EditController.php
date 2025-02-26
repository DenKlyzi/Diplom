<?php

namespace App\Http\Controllers\GpuCatalogs;
use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(GpuCatalog $gpus)
    {
        $categories = Category::all();
        return view('gpus.edit', compact('gpus', 'categories'));
    }
}
