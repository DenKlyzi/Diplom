@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | контакты')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden ">
            <section class="breadcrumb-area" style="background-image: url({{asset('dist/img/imagesSite/inner-pages/breadcum-bg.png')}});">
            </section>
            <section class="contact-page-info pt-60">
                <div class="container">
                    <div class="row mt--30">
                        <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                            <div class="contact-page-info__single mt-30">
                                <div class="thumb"> <img src="{{asset('dist/img/imagesSite/inner-pages/location.png')}}" alt=""> </div>
                                <div class="contact-box">
                                    <h4>Адрес</h4>
                                    <p class="text1">Калуга</p>
                                    <p class="text2">Грабцевское шоссе 128<br>Главный вход</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                            <div class="contact-page-info__single mt-30">
                                <div class="thumb"> <img src="{{asset('dist/img/imagesSite/inner-pages/contact.png')}}" alt=""> </div>
                                <div class="contact-box">
                                    <h4>Контакты</h4>
                                    <ul>
                                        <li>
                                            <p>Номер: <a href="tel:123456789">8-(800)-555-35-35</a></p>
                                        </li>
                                        <li>
                                            <p>Горячая линия: <a href="tel:123456789">555-35-35</a></p>
                                        </li>
                                        <li>
                                            <p>E-mail: <a href="mailto:yourmail@email.com">vortex@mail.ru</a></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeInUp animated">
                            <div class="contact-page-info__single mt-30 ">
                                <div class="thumb"> <img src="{{asset('dist/img/imagesSite/inner-pages/clockt.png')}}" alt=""> </div>
                                <div class="contact-box">
                                    <h4>Время работы</h4>
                                    <p class="text1">Пн - Пт: <a>08:30 - 20:00</a></p>
                                    <p class="text2">Сб - Вс: <a>Закрыто</a></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-box pt-60 pb-60">
                <div class="container">
                    <div class="row g-0 background align-items-center wow fadeInUp animated">
                        <div class="col-lg-5">
                            <div class="map"> <iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A0c25869ab13a3421ee0e6c9fc44e246938da35aebfa799de99960a74aa53e470&amp;source=constructor"
                                    allowfullscreen="" loading="lazy"></iframe> </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <h3>Напишите ваше обращение</h3><form method="POST" action="{{ route('send.contact.form') }}" class="common-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Ваше Имя</label>
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Имя" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="number">Номер телефона</label>
                                                <input type="text" id="number" name="phone" class="form-control" placeholder="+7" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email адрес</label>
                                                <input type="email" id="email" name="email" class="form-control" placeholder="support@gmail.com" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <p>Тема</p>
                                                <div class="sellect-box">
                                                    <select name="subject" required>
                                                        <option>Хочу узнать статус заказа</option>
                                                        <option value="1">Хочу получить возмещение</option>
                                                        <option value="4">Хочу купить товар</option>
                                                        <option value="3">Другое</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <div class="form-group">
                                                <label for="text">Сообщение</label>
                                                <input type="text" id="text" name="text" class="form-control" placeholder="Здравствуйте..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn--primary style2">Отправить</button>
                                </form>

                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
