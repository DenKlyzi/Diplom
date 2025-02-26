<?php

namespace App\Http\Controllers\RamCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\RamCatalogs\UpdateRequest;
use App\Models\RamCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, RamCatalog $rams)
    {
        $data = $request->validated();
        $rams->update($data);
        return view('rams.show', compact('rams'));
    }
}
