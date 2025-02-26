<?php

namespace App\Http\Controllers\Site\Contacts;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view("site.contacts");
    }
}
