<?php

namespace App\Http\Controllers\OtherCatalogs;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(OtherCatalog $others)
    {
        return view("others.show", compact("others"));
    }
}
