<?php

namespace App\Http\Controllers\PeripheryCatalogs;
use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(PeripheryCatalog $peripherys)
    {
        $peripherys->delete();
        return redirect()->route('peripherys.index');
    }
}
