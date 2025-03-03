<?php

namespace App\Http\Controllers\Site\NewsCat;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function ShowCards(Request $request)
    {
        $query = $request->input('query', '');

        if ($query) {
            $news = News::where('title', 'like', '%' . $query . '%')->get();
        } else {
            $news = News::all();
        }

        return view('site.newscat', compact('news', 'query'));
    }
}
