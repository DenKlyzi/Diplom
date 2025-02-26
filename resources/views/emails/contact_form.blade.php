<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новое сообщение</title>
</head>
<body>
<h1>Новое сообщение с контактной формы</h1>
<p><strong>Имя:</strong> {{ $name }}</p>
<p><strong>Номер телефона:</strong> {{ $phone }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Тема:</strong> {{ $subject }}</p>
<p><strong>Сообщение:</strong></p>
<p>{{ $text }}</p>
</body>
</html>
