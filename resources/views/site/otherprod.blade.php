@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Разное')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $othersCatalog->title }}</h1>

                    <div v-if="other" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $othersCatalog->image_url }}">
                                <span class="availability">{{ $othersCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Бренд:</strong> {{ $othersCatalog->characteristicOne }}</li>
                                    <li><strong>Тип товара:</strong> {{ $othersCatalog->characteristicTwo }}</li>
                                    <li><strong>Вес упаковки:</strong> {{ $othersCatalog->characteristicThree }}</li>
                                    <li><strong>Габариты упаковки:</strong> {{ $othersCatalog->characteristicFour }}</li>
                                    <li><strong>Гарантия:</strong> {{ $othersCatalog->characteristicFive }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $othersCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $othersCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $othersCatalog->id }}" data-catalog-type="Разное">Купить</button>
                            <button class="like-button" data-id="{{ $othersCatalog->id }}" data-catalog-type="Разное">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
