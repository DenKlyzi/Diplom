<?php

namespace App\Http\Controllers\News;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view("news.create");
    }
}
