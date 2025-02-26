<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Чек об оплате</title>
</head>
<body>
<h1>Чек об оплате заказа №{{ $order->id }}</h1>
<p><strong>Дата заказа:</strong> {{ $order->created_at }}</p>
<p><strong>Статус:</strong> {{ $order->status }}</p>
<h3>Содержимое заказа:</h3>
<ul>
    @foreach(json_decode($order->cart_items) as $item)
        <li>
            <strong>{{ $item->name }}</strong> - {{ $item->quantity }} x {{ $item->price }} ₽ = {{ $item->quantity * $item->price }} ₽
        </li>
    @endforeach
</ul>
<p><strong>Итого:</strong> {{ $order->total_price }} ₽</p>
</body>
</html>
