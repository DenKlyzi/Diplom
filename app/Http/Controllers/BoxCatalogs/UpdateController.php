<?php

namespace App\Http\Controllers\BoxCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\BoxCatalogs\UpdateRequest;
use App\Models\BoxCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, BoxCatalog $boxes)
    {
        $data = $request->validated();
        $boxes->update($data);
        return view('boxes.show', compact('boxes'));
    }
}
