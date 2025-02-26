<?php

namespace App\Http\Controllers\BoxCatalogs;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(BoxCatalog $boxes)
    {
        return view("boxes.show", compact("boxes"));
    }
}
