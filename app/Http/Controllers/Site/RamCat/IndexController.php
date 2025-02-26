<?php

namespace App\Http\Controllers\Site\RamCat;

use App\Http\Controllers\Controller;
use App\Models\RamCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $ramsCatalog = RamCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $ramsCatalog = RamCatalog::all();
        }

        return view('site.ramcat', compact('ramsCatalog', 'query'));
    }
}
