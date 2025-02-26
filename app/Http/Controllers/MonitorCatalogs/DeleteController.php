<?php

namespace App\Http\Controllers\MonitorCatalogs;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(MonitorCatalog $monitors)
    {
        $monitors->delete();
        return redirect()->route('monitors.index');
    }
}
