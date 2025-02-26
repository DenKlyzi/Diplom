<?php

namespace App\Http\Controllers\Site\Likes;

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
    public function __invoke()
    {
        $like_id = $_COOKIE['like_id'] ?? null;

        if ($like_id) {
            \Cart::session($like_id);
            $like = \Cart::getContent();
        } else {
            $like = collect();
        }

        return view("site.likes", compact("like"));
    }

    public function showLike()
    {
        $like_id = $_COOKIE['like_id'] ?? null;

        if ($like_id) {
            \Cart::session($like_id);
            $like = \Cart::getContent();
        } else {
            $like = collect();
        }

        return view("site.likes", compact("like"));
    }

    public function addToLike(Request $request)
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

        $itemLike = $modelClass::find($request->id);

        if (!$itemLike) {
            return response()->json(['error' => 'Товар не найден.'], 404);
        }

        $uniqueId = "{$catalogType}_{$itemLike->id}";
        if (!isset($_COOKIE['like_id'])) {
            setcookie('like_id', uniqid(), time() + (86400 * 10), "/");
        }

        $like_id = $_COOKIE['like_id'];

        \Cart::session($like_id)->add([
            'id' => $uniqueId,
            'name' => $itemLike->title,
            'price' => $itemLike->price,
            'quantity' => 1,
            'attributes' => [
                'image_url' => $itemLike->image_url,
                'catalog_type' => $catalogType,
            ]
        ]);

        return response()->json([
            'success' => true,
            'cart' => \Cart::session($like_id)->getContent()
        ]);
    }

    public function removeFromLike($id)
    {
        if (isset($_COOKIE['like_id'])) {
            $like_id = $_COOKIE['like_id'];
            \Cart::session($like_id)->remove($id);
        }

        return redirect()->back()->with('success', 'Товар удалён из корзины.');
    }
}

