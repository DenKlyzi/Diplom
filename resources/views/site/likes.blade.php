@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Избранное')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <h1 class="h1-cart">Избранные товары</h1>
            <section class="cart-area pb-120">
                <div class="container">
                    <div>
                        @if ($like->isEmpty())
                            <p class="cart__null">У вас нет избранных.</p>
                        @else
                            <div class="row wow fadeInUp animated">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="cart-table-box">
                                        <div class="table-outer">
                                            <table class="cart-table">
                                                <thead class="cart-header">
                                                <tr>
                                                    <th>Наименование</th>
                                                    <th class="price">Цена</th>
                                                    <th>Действия</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($like as $itemLike)
                                                    <tr>
                                                        <td>
                                                            <div class="thumb-box">
                                                                <a class="thumb">
                                                                    <img src="{{ $itemLike->attributes->image_url }}" alt="" />
                                                                </a>
                                                                <a class="title">
                                                                    <h5>{{ $itemLike->name }}</h5>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>{{ $itemLike->price }} ₽</td>
                                                        <td>
                                                            <form action="{{ route('likes.remove', $itemLike->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger-likes">Удалить</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
