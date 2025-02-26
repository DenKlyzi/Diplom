<?php

namespace App\Http\Controllers\GpuCatalogs;
use App\Http\Controllers\Controller;
use App\Models\GpuCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(GpuCatalog $gpus)
    {
        $gpus->delete();
        return redirect()->route('gpus.index');
    }
}
