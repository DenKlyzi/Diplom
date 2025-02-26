<?php

namespace App\Http\Controllers\Site\BoxCat;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $boxesCatalog = BoxCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $boxesCatalog = BoxCatalog::all();
        }

        return view('site.boxcat', compact('boxesCatalog', 'query'));
    }
}
