@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Вход')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="login-page">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <div class="login-register-form" style="background-image: url('{{asset('dist/img/imagesSite/inner-pages/login-bg.png')}}');">
                                <div class="top-title text-center">
                                    <h2>Авторизация</h2>
                                    <p class="login-question">
                                        Нет аккаунта?
                                        <a href="{{ route('site.register') }}">Регистрация</a>
                                    </p>
                                    @foreach (['password', 'login'] as $field)
                                        @error($field)
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    @endforeach
                                </div>
                                <form class="common-form" method="POST" action="{{ url('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="login" class="form-control" placeholder="Логин или Email" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Пароль" required/>
                                    </div>
                                    <div class="checkk">
                                        <div class="form-check p-0 m-0">
                                            <input type="checkbox" name="remember" id="remember" />
                                            <label class="p-0" for="remember">Запомнить меня</label>
                                        </div>
                                        {{-- <a href="#" class="forgot">Забыли пароль?</a> --}}
                                    </div>
                                    <button type="submit" class="btn--primary style2">Вход</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
