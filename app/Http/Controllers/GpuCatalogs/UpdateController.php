<?php

namespace App\Http\Controllers\GpuCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\GpuCatalogs\UpdateRequest;
use App\Models\GpuCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, GpuCatalog $gpus)
    {
        $data = $request->validated();
        $gpus->update($data);
        return view('gpus.show', compact('gpus'));
    }
}
