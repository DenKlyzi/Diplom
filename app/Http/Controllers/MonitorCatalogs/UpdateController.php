<?php

namespace App\Http\Controllers\MonitorCatalogs;

use App\Http\Controllers\Controller;
use App\Http\Requests\MonitorCatalogs\UpdateRequest;
use App\Models\MonitorCatalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, MonitorCatalog $monitors)
    {
        $data = $request->validated();
        $monitors->update($data);
        return view('monitors.show', compact('monitors'));
    }
}
