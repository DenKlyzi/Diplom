<?php

namespace App\Http\Controllers\Site\OtherCat;

use App\Http\Controllers\Controller;
use App\Models\OtherCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $othersCatalog = OtherCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $othersCatalog = OtherCatalog::all();
        }

        return view('site.othercat', compact('othersCatalog', 'query'));
    }
}
