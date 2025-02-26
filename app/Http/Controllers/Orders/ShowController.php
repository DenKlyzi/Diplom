<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Order $order)
    {
        return view("orders.show", compact("order"));
    }
}
