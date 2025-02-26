<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\MonitorCatalog;
use App\Models\Order;

class IndexController extends Controller
{
    public function __invoke()
    {
        $orders = Order::with('user', 'items.product')->get();
        return view('orders.index', compact('orders'));
    }
}
