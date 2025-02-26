@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | ОЗУ')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $ramsCatalog->title }}</h1>

                    <div v-if="ram" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $ramsCatalog->image_url }}">
                                <span class="availability">{{ $ramsCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Тип памяти:</strong> {{ $ramsCatalog->memory_type }}</li>
                                    <li><strong>Суммарный объем памяти:</strong> {{ $ramsCatalog->total_volume }}</li>
                                    <li><strong>Объем одного модуля памяти:</strong> {{ $ramsCatalog->volume }}</li>
                                    <li><strong>Тактовая частота:</strong> {{ $ramsCatalog->tick_rate }}</li>
                                    <li><strong>Напряжение питания:</strong> {{ $ramsCatalog->voltage }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $ramsCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $ramsCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $ramsCatalog->id }}" data-catalog-type="ОЗУ">Купить</button>
                            <button class="like-button" data-id="{{ $ramsCatalog->id }}" data-catalog-type="ОЗУ">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
