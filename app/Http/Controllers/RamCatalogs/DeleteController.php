<?php

namespace App\Http\Controllers\RamCatalogs;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(RamCatalog $rams)
    {
        $rams->delete();
        return redirect()->route('rams.index');
    }
}
