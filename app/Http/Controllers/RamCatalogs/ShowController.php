<?php

namespace App\Http\Controllers\RamCatalogs;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(RamCatalog $rams)
    {
        return view("rams.show", compact("rams"));
    }
}
