<?php

namespace App\Http\Controllers\PeripheryCatalogs;

use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(PeripheryCatalog $peripherys)
    {
        return view("peripherys.show", compact("peripherys"));
    }
}
