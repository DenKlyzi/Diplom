<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReceiptMail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = \Cart::session($_COOKIE['cart_id']);
        $totalPrice = $cart->getTotal() + 1000;

        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $totalPrice,
            'status' => 'paid',
            'cart_items' => json_encode($cart->getContent()),
        ]);

        $userEmail = auth()->user()->email;
        Mail::to($userEmail)->send(new OrderReceiptMail($order));

        \Cart::session($_COOKIE['cart_id'])->clear();

        return redirect()->route('site.cart')->with('success', 'Ваш заказ успешно оформлен!');
    }
}
