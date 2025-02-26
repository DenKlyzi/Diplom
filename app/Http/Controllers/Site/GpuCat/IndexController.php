<?php

namespace App\Http\Controllers\Site\GpuCat;

use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {

            $gpusCatalog = GpuCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $gpusCatalog = GpuCatalog::all();
        }

        return view('site.gpucat', compact('gpusCatalog', 'query'));
    }
}
