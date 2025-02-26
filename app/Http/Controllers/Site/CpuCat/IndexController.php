<?php

namespace App\Http\Controllers\Site\CpuCat;

use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $cpusCatalog = CpuCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $cpusCatalog = cpuCatalog::all();
        }

        return view('site.cpucat', compact('cpusCatalog', 'query'));
    }
}
