<?php

namespace App\Http\Controllers\MonitorCatalogs;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke(MonitorCatalog $monitors)
    {
        $categories = Category::all();
        return view('monitors.edit', compact('monitors', 'categories'));
    }
}
