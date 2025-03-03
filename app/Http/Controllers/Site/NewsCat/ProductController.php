<?php

namespace App\Http\Controllers\Site\NewsCat;

use App\Http\Controllers\Controller;
use App\Models\News;

class ProductController extends Controller
{
    public function showNews($news_id)
    {
        $news = News::findOrFail($news_id);
        return view('site.newsprod', compact('news'));
    }
}
