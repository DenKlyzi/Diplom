@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vortex | Профиль</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <div class="container justify-content-center align-items-center min-vh-100">
        <h1 class="profile__h1 mb-4">Профиль</h1>
        <div class="main-body w-100">
            <div class="row gutters-sm">
                <!-- Left Profile Card -->
                <div class="col-md-4 mb-3">
                    <div class="card text-center py-4">
                        <div class="d-flex flex-column align-items-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle mb-3" width="180" height="180">
                            <h4 class="mb-2">{{ Auth::user()->login }}</h4>
                            <p class="text-secondary">{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
{{--                            <button class="btn--primary style3 mb-3">Редактировать профиль</button>--}}
                            <div class="text-center mt-3">
                                <button class="btn btn-danger btn-sm w-50 mt-3"><a href="{{route('site.logout')}}" style="color: white;">Выйти</a></button>
                                <a href="{{ route('site.contacts') }}" class="help w-50 mt-3">Поддержка</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Информация об аккаунте</h5>
                            <div class="row mb-3">
                                <div class="col-sm-4"><strong>Имя:</strong></div>
                                <div class="col-sm-8 text-secondary">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4"><strong>Фамилия:</strong></div>
                                <div class="col-sm-8 text-secondary">{{ Auth::user()->surname }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4"><strong>Email:</strong></div>
                                <div class="col-sm-8 text-secondary">{{ Auth::user()->email }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4"><strong>Дата регистрации:</strong></div>
                                <div class="col-sm-8 text-secondary">{{ Auth::user()->created_at }}</div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h5 class="mb-4">Заказы</h5>--}}
{{--                            <div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
