<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($orderId)
    {
        $order = Order::findOrFail($orderId);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Заказ удален');
    }
}
