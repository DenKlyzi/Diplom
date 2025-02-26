@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Процессоры')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr">

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $cpusCatalog->title }}</h1>

                    <div v-if="cpu" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $cpusCatalog->image_url }}">
                                <span class="availability">{{ $cpusCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Модель:</strong> {{ $cpusCatalog->model }}</li>
                                    <li><strong>Сокет:</strong> {{ $cpusCatalog->socket }}</li>
                                    <li><strong>Резил:</strong> {{ $cpusCatalog->release }}</li>
                                    <li><strong>Количество ядер:</strong> {{ $cpusCatalog->cores }}</li>
                                    <li><strong>Количество потоков:</strong> {{ $cpusCatalog->streams }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $cpusCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $cpusCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $cpusCatalog->id }}" data-catalog-type="Процессоры">Купить</button>
                            <button class="like-button" data-id="{{ $cpusCatalog->id }}" data-catalog-type="Процессоры">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
