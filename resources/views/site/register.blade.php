@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Регистрация')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <section class="login-page pt-50 pb-60">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9 wow fadeInUp animated">
                            <div class="login-register-form" style="background-image: url('{{asset('dist/img/imagesSite/inner-pages/login-bg.png')}}');">
                                <div class="top-title text-center">
                                    <h2>Регистрация</h2>
                                    <p class="login-question">
                                        Есть аккаунт? <a href="{{ route('site.login') }}">Вход</a>
                                    </p>
                                    @foreach (['password', 'name', 'surname', 'login', 'email'] as $field)
                                        @error($field)
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    @endforeach
                                    <div id="login-feedback" class="text-danger" style="text-align: center;"></div>
                                </div>

                                <form class="common-form" method="POST" action="{{ url('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Ваше имя" />
                                    </div>

                                    <div class="form-group">
                                        <input id="surname" name="surname" value="{{ old('surname') }}" type="text" class="form-control" placeholder="Ваша Фамилия" />
                                    </div>
                                    <div class="form-group">
                                        <input id="login" name="login" value="{{ old('login') }}" type="text" class="form-control" placeholder="Логин" />

                                    </div>

                                    <div class="form-group">
                                        <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" />
                                    </div>

                                    <div class="form-group eye">
                                        <input id="password" name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="Пароль" />
                                    </div>

                                    <div class="checkk">
                                        <div class="form-check p-0 m-0">
                                            <input type="checkbox" id="remember" />
                                            <label class="p-0" for="remember">
                                                Принимаю Условия и Политику конфиденциальности
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn--primary style2">Регистрация</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script>
            document.getElementById('login').addEventListener('input', function () {
                const login = this.value;
                const feedback = document.getElementById('login-feedback');

                if (login.length > 0) {
                    fetch('{{ route('check.login') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ login })
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.exists) {
                                feedback.textContent = 'Этот логин уже занят.';
                            } else {
                                feedback.textContent = '';
                            }
                        });
                } else {
                    feedback.textContent = '';
                }
            });
        </script>
    </div>
@endsection
