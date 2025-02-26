@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Мониторы')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $monitorsCatalog->title }}</h1>

                    <div v-if="monitor" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $monitorsCatalog->image_url }}">
                                <span class="availability">{{ $monitorsCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Дигональ:</strong> {{ $monitorsCatalog->diagonal }}</li>
                                    <li><strong>Тип монитора:</strong> {{ $monitorsCatalog->monitor_type }}</li>
                                    <li><strong>Макс. частота кадров:</strong> {{ $monitorsCatalog->frame_rate }}</li>
                                    <li><strong>Игровой монитор:</strong> {{ $monitorsCatalog->game_monitor }}</li>
                                    <li><strong>Время отклика:</strong> {{ $monitorsCatalog->response_time }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $monitorsCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $monitorsCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $monitorsCatalog->id }}" data-catalog-type="Мониторы">Купить</button>
                            <button class="like-button" data-id="{{ $monitorsCatalog->id }}" data-catalog-type="Мониторы">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
