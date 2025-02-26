@extends('layouts.mainSite')
@section('content')
@section('custom_js')

@endsection
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Корпуса')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr"/>

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $boxesCatalog->title }}</h1>
                        <div class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $boxesCatalog->image_url }}">
                                <span class="availability">{{ $boxesCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Типоразмер корпуса: {{ $boxesCatalog->size_type }}</strong> </li>
                                    <li><strong>Длина: {{ $boxesCatalog->length }}</strong> </li>
                                    <li><strong>Ширина: {{ $boxesCatalog->width }}</strong> </li>
                                    <li><strong>Высота: {{ $boxesCatalog->height }}</strong> </li>
                                    <li><strong>Вес: {{ $boxesCatalog->weight }}</strong> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $boxesCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $boxesCatalog->price }} ₽</span>
                            </div>
                            <button class="buy-button" data-id="{{ $boxesCatalog->id }}" data-catalog-type="Корпуса">Купить</button>
                            <button class="like-button" data-id="{{ $boxesCatalog->id }}" data-catalog-type="Корпуса">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
