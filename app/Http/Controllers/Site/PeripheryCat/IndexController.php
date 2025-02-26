<?php

namespace App\Http\Controllers\Site\PeripheryCat;

use App\Http\Controllers\Controller;
use App\Models\PeripheryCatalog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $peripherysCatalog = PeripheryCatalog::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $peripherysCatalog = PeripheryCatalog::all();
        }

        return view('site.peripherycat', compact('peripherysCatalog', 'query'));
    }
}
