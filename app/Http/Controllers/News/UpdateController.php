<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\UpdateRequest;
use App\Models\News;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, News $news)
    {
        $data = $request->validated();
        $news->update($data);
        return view('news.show', compact('news'));
    }
}
