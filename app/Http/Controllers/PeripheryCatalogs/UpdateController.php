<?php

namespace App\Http\Controllers\PeripheryCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeripheryCatalogs\UpdateRequest;
use App\Models\PeripheryCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, PeripheryCatalog $peripherys)
    {
        $data = $request->validated();
        $peripherys->update($data);
        return view('peripherys.show', compact('peripherys'));
    }
}
