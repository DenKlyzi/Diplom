<?php

namespace App\Http\Controllers\CpuCatalogs;
use App\Http\Controllers\Controller;
use App\Models\CpuCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(CpuCatalog $cpus)
    {
        $cpus->delete();
        return redirect()->route('cpus.index');
    }
}
