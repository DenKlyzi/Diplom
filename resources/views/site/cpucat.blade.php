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
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});">
            </section>
            <hr class="dividing-hr">
            <div class="button-links">
                <div class="container">
                    <a href="{{ route('site.gpucat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-1.png')}}">
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('site.cpucat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-2.png')}}">
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('site.ramcat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-3.png')}}">
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('site.boxcat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-4.png')}}">
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('site.monitorcat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-5.png')}}">
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('site.peripherycat') }}">
                        <div class="border-button">
                            <div class="button-link">
                                <img src="{{asset('dist/img/imagesSite/buttons/button-6.png')}}">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <hr class="dividing-hr">
            <div class="main-pc">
                <h1>Процессоры</h1>
                <div class="container">
                    @if($query)
                        @if($cpusCatalog->isEmpty())
                            <div class="no-results-message">
                                <p>По вашему запросу ничего не найдено.</p>
                            </div>
                        @endif
                    @endif

                    @foreach($cpusCatalog as $cpus)
                    <div class="border-product" style="height: 600px;">
                        <div class="cpu-link">
                            <h3>{{ $cpus -> title }}</h3>
                            <img src="{{ $cpus->image_url }}">
                            <ul class="description-pc">
                                <li>
                                    <p>Модель {{ $cpus -> title }} </p>
                                </li>
                                <li>
                                    <p>Сокет {{ $cpus -> socket }}</p>
                                </li>
                                <li>
                                    <p>Год релиза {{ $cpus -> release }}</p>
                                </li>
                                <li>
                                    <p>Количество ядер {{ $cpus -> cores }}</p>
                                </li>
                                <li>
                                    <p>Число потоков {{ $cpus -> streams }}</p>
                                </li>
                            </ul>
                            <h4 class="price-pc">{{ $cpus -> price }} ₽</h4>
                            <div class="about-button">
                                <a href="{{ route('site.cpuprod', ['cpu_id' => $cpus->id]) }}" class="about-pc">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr class="dividing-hr">
            <div class="row justify-content-center mb-4">
                <div class="col-12 wow fadeInUp animated">
                    <h3 class="text-center">Наши партнёры</h3>
                    <div class="partnerslider d-flex justify-content-center mt-3">
                        <div class="partner-one__brand">
                            <a href="#0" class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('dist/img/imagesSite/brand/brand-logo-1.png')}}" alt="Partner 1">
                            </a>
                        </div>
                        <div class="partner-one__brand">
                            <a href="#0" class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('dist/img/imagesSite/brand/brand-logo-3.png')}}" alt="Partner 2">
                            </a>
                        </div>
                        <div class="partner-one__brand">
                            <a href="#0" class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('dist/img/imagesSite/brand/brand-logo-4.png')}}" alt="Partner 3">
                            </a>
                        </div>
                        <div class="partner-one__brand">
                            <a href="#0" class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('dist/img/imagesSite/brand/brand-logo-2.png')}}" alt="Partner 4">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
