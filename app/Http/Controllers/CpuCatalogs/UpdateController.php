<?php

namespace App\Http\Controllers\CpuCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\CpuCatalogs\UpdateRequest;
use App\Models\CpuCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CpuCatalog $cpus)
    {
        $data = $request->validated();
        $cpus->update($data);
        return view('cpus.show', compact('cpus'));
    }
}
