<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    public function __invoke()
    {
        $newscatalog = News::all();
        return view("news.index", compact("newscatalog"));
    }
}
