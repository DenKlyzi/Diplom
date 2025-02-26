<?php

namespace App\Http\Controllers\OtherCatalogs;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(OtherCatalog $others)
    {
        $others->delete();
        return redirect()->route('others.index');
    }
}
