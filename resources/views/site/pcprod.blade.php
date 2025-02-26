@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Готовые сборки')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $products->title }}</h1>

                    <div v-if="product" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $products->image_url }}">
                                <span class="availability">{{ $products->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Процессор:</strong> {{ $products->cpu }}</li>
                                    <li><strong>Видеокарта:</strong> {{ $products->gpu }}</li>
                                    <li><strong>ОЗУ:</strong> {{ $products->ram }}</li>
                                    <li><strong>Память:</strong> {{ $products->memory }}</li>
                                    <li><strong>Материнская плата:</strong> {{ $products->motherboard }}</li>
                                    <li><strong>Охлаждение:</strong> {{ $products->cooling }}</li>
                                    <li><strong>Блок питания:</strong> {{ $products->power_unit }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $products->description }}</p>
                            <div class="products-price">
                                <span>{{ $products->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $products->id }}" data-catalog-type="Готовые сборки">Купить</button>
                            <button class="like-button" data-id="{{ $products->id }}" data-catalog-type="Готовые сборки">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
