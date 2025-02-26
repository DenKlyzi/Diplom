@extends('layouts.mainSite')

@section('content')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vortex | Корзина')</title>
        @stack('styles')
    </head>
    <div>
        <main class="overflow-hidden">
            <h1 class="h1-cart">Корзина</h1>
            <section class="cart-area pb-120">
                <div class="container">
                    @if ($cart->isEmpty())
                        <p class="cart__null">Ваша корзина пуста.</p>
                    @else
                        <div class="row wow fadeInUp animated">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="cart-table-box">
                                    <div class="table-outer">
                                        <table class="cart-table">
                                            <thead class="cart-header">
                                            <tr>
                                                <th>Наименование</th>
                                                <th>Цена</th>
                                                <th>Количество</th>
                                                <th>Всего</th>
                                                <th>Действия</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($cart as $item)
                                                <tr>
                                                    <td>
                                                        <div class="thumb-box">
                                                            <a class="thumb">
                                                                <img src="{{ $item->attributes->image_url }}" alt="Товар">
                                                            </a>
                                                            <a class="title">
                                                                <h5>{{ $item->name }}</h5>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->price }} ₽</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->price * $item->quantity }} ₽</td>
                                                    <td>
                                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Удалить</button>
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

                        <div class="row pt-120">
                            <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
                                <div class="cart-total-box">
                                    <div class="inner-title">
                                        <h3>Итоговый подсчёт</h3>
                                    </div>
                                    <ul class="cart-check-out-list">
                                        <li>
                                            <div class="left">
                                                <p>Всего товаров:</p>
                                            </div>
                                            <div class="right">
                                                <p>{{ \Cart::session($_COOKIE['cart_id'])->getTotalQuantity() }}</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left">
                                                <p>Доставка:</p>
                                            </div>
                                            <div class="right">
                                                <p>1 000 ₽</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="left">
                                                <p>Итоговая стоимость:</p>
                                            </div>
                                            <div class="right">
                                                <p>{{ \Cart::session($_COOKIE['cart_id'])->getTotal() + 1000 }} ₽</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row mt--30">
                            <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
                                <div class="cart-check-out mt-30">
                                    <h3>Итого</h3>
                                    <ul class="cart-check-out-list">
                                        <li>
                                            <div class="left">
                                                <p>Итог:</p>
                                            </div>
                                            <div class="right">
                                                <p>{{ \Cart::session($_COOKIE['cart_id'])->getTotal() + 1000 }} ₽</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="apply-coupon-button mt-30">
                                <form action="{{ route('order.store') }}" method="POST">
                                    @csrf
                                    <button class="btn--primary style2" type="submit">Оформить заказ</button>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            </section>
        </main>
    </div>
@endsection
