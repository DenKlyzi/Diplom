@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Периферия')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $peripherysCatalog->title }}</h1>

                    <div v-if="periphery" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $peripherysCatalog->image_url }}">
                                <span class="availability">{{ $peripherysCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Бренд:</strong> {{ $peripherysCatalog->characteristicOne }}</li>
                                    <li><strong>Тип товара:</strong> {{ $peripherysCatalog->characteristicTwo }}</li>
                                    <li><strong>Вес упаковки:</strong> {{ $peripherysCatalog->characteristicThree }}</li>
                                    <li><strong>Габариты упаковки:</strong> {{ $peripherysCatalog->characteristicFour }}</li>
                                    <li><strong>Гарантия:</strong> {{ $peripherysCatalog->characteristicFive }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $peripherysCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $peripherysCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $peripherysCatalog->id }}" data-catalog-type="Периферия">Купить</button>
                            <button class="like-button" data-id="{{ $peripherysCatalog->id }}" data-catalog-type="Перифирия">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
