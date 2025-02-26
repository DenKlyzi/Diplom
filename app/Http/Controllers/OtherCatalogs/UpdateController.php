<?php

namespace App\Http\Controllers\OtherCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtherCatalogs\UpdateRequest;
use App\Models\OtherCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, OtherCatalog $others)
    {
        $data = $request->validated();
        $others->update($data);
        return view('others.show', compact('others'));
    }
}
