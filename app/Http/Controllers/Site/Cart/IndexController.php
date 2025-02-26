<?php

namespace App\Http\Controllers\Site\Cart;

use App\Http\Controllers\Controller;
use App\Models\BoxCatalog;
use App\Models\CpuCatalog;
use App\Models\GpuCatalog;
use App\Models\MonitorCatalog;
use App\Models\OtherCatalog;
use App\Models\PeripheryCatalog;
use App\Models\Product;
use App\Models\RamCatalog;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;

class IndexController extends Controller
{
    public function showCart()
    {
        $cart_id = $_COOKIE['cart_id'] ?? null;

        if ($cart_id) {
            \Cart::session($cart_id);
            $cart = \Cart::getContent();
        } else {
            $cart = collect();
        }

        return view("site.cart", compact('cart'));
    }

    public function addToCart(Request $request)
    {
        $catalogType = $request->catalog_type;

        if (!in_array($catalogType, ['Корпуса', 'Процессоры', 'Видеокарты', 'Мониторы', 'ОЗУ', 'Готовые сборки', 'Периферия', 'Разное'])) {
            return response()->json(['error' => 'Указан некорректный тип каталога.'], 400);
        }

        $modelClass = match($catalogType) {
            'Корпуса' => BoxCatalog::class,
            'Процессоры' => CpuCatalog::class,
            'Видеокарты' => GpuCatalog::class,
            'Мониторы' => MonitorCatalog::class,
            'ОЗУ' => RamCatalog::class,
            'Готовые сборки' => Product::class,
            'Периферия' => PeripheryCatalog::class,
            'Разное' => OtherCatalog::class,
            default => throw new \Exception('Неизвестный тип каталога'),
        };

        $item = $modelClass::find($request->id);

        if (!$item) {
            return response()->json(['error' => 'Товар не найден.'], 404);
        }

        $uniqueId = "{$catalogType}_{$item->id}";

        if (!isset($_COOKIE['cart_id'])) {
            setcookie('cart_id', uniqid(), time() + (86400 * 10), "/");
        }

        $cart_id = $_COOKIE['cart_id'];

        \Cart::session($cart_id)->add([
            'id' => $uniqueId,
            'name' => $item->title,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => [
                'image_url' => $item->image_url,
            ]
        ]);

        return response()->json([
            'success' => true,
            'cart' => \Cart::session($cart_id)->getContent()
        ]);
    }

    public function removeFromCart($id)
    {
        if (isset($_COOKIE['cart_id'])) {
            $cart_id = $_COOKIE['cart_id'];
            \Cart::session($cart_id)->remove($id);
        }

        return redirect()->back()->with('success', 'Товар удалён из корзины.');
    }
}
