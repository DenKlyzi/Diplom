<?php

namespace App\Http\Controllers\BoxCatalogs;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(BoxCatalog $boxes)
    {
        $boxes->delete();
        return redirect()->route('boxes.index');
    }
}
