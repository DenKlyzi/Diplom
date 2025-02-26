<?php

namespace App\Http\Controllers\Site\MonitorCat;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $monitorsCatalog = MonitorCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $monitorsCatalog = MonitorCatalog::all();
        }

        return view('site.monitorcat', compact('monitorsCatalog', 'query'));
    }
}
