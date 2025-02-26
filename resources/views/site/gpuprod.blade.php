@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Видеокарты')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});"></section>
            <hr class="dividing-hr"/>

            <div class="main-site-pc">
                <div class="container">
                    <h1 class="product-name">{{ $gpusCatalog->title }}</h1>

                    <div v-if="gpu" class="product-content">
                        <div class="left-section">
                            <div class="main-image">
                                <img src="{{ $gpusCatalog->image_url }}">
                                <span class="availability">{{ $gpusCatalog->count > 0 ? 'В наличии' : 'Не в наличии' }}</span>
                            </div>
                            <div class="product-info">
                                <h2>Информация</h2>
                                <ul>
                                    <li><strong>Частота работы видеочипа:</strong> {{ $gpusCatalog->tick_rate }} MHz</li>
                                    <li><strong>Турбочастота:</strong> {{ $gpusCatalog->turbo_rate }} MHz</li>
                                    <li><strong>Интерфейс подключения:</strong> {{ $gpusCatalog->connect_port }}</li>
                                    <li><strong>Объем видеопамяти:</strong> {{ $gpusCatalog->video_memory }} GB</li>
                                </ul>
                            </div>
                        </div>

                        <div class="right-section">
                            <h2 class="description-title">Описание товара</h2>
                            <p>{{ $gpusCatalog->description }}</p>
                            <div class="product-price">
                                <span>{{ $gpusCatalog->price }}р</span>
                            </div>
                            <button class="buy-button" data-id="{{ $gpusCatalog->id }}" data-catalog-type="Видеокарты">Купить</button>
                            <button class="like-button" data-id="{{ $gpusCatalog->id }}" data-catalog-type="Видеокарты">В избранное</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
