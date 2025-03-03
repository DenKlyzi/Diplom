<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="shortcut icon" href="{{asset('dist/img/imagesSite/logo/favicon-32x32.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.5.1.1.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/css/styleSite.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div>
    <header class="header-default">
        <div class="menubox">
            <div class="main-menu">
                <div class="container">
                    <div class="left">
                        <div class="address">
                            <img src="{{asset('dist/img/imagesSite/header/map.png')}}">
                            <p>Калуга, Грабцевское шоссе 128</p>
                        </div>
                    </div>

                    <div class="middle">
                        <div class="search-box-holder">
                            <div class="search-form ">
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="form-group search-box menu d-flex flex-column align-items-center">
                                        <input type="text" name="query" class="form-control" placeholder="Поиск продукции..." value="{{ request('query') }}">
                                        <span class="search-icon"><img src="{{asset('dist/img/imagesSite/header/lypa.png')}}"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <ul class="main-menu__widge-box d-flex align-items-center ">
                            <li class="d-lg-block d-none"><a href="{{ route('site.likes') }}">Избранное</a></li>
                            <li class="d-lg-block d-none"><a href="{{ route('site.index') }}">О нас</a></li>
                            <li class="d-lg-block d-none"><a href="{{ route('site.contacts') }}">Контакты</a></li>
                            <li class="d-lg-block d-none">
                                @auth
                                    <a href="{{ route('site.profile') }}"><img src="{{ asset('dist/img/imagesSite/header/user.png') }}"></a>
                                @else
                                    <a href="{{ route('site.login') }}"><img src="{{ asset('dist/img/imagesSite/header/user.png') }}"></a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="dividing-hr-header">
            <div class="mega-menu-default mega-menu d-lg-block d-none">
                <div class="container position-relative">
                    <div class="row">
                        <nav>
                            <ul class="page-dropdown-menu d-flex align-items-center justify-content-center">
                                <div class="middle"><a class="logo" href="{{ route('site.index') }}"><img src="{{asset('dist/img/imagesSite/logo/logo.png')}}" alt=""></a></div>
                                <li class="dropdown-list"><a href="{{ route('site.gpucat') }}"><span>ВИДЕОКАРТЫ</span></a></li>
                                <li class="dropdown-list"><a href="{{ route('site.cpucat') }}">ПРОЦЕССОРЫ</a></li>
                                <li class="dropdown-list"><a href="{{ route('site.ramcat') }}"><span>ОПЕРАТИВНАЯ ПАМЯТЬ</span></a></li>
                                <li class="dropdown-list"><a href="{{ route('site.boxcat') }}"><span>КОРПУСА</span></a></li>
                                <li class="dropdown-list"><a href="{{ route('site.pccat') }}">ГОТОВЫЕ СБОРКИ</a></li>
                                <li class="dropdown-list"><a href="{{ route('site.othercat') }}"><span>ДРУГОЕ</span></a></li>
                                <li class="dropdown-list"><a href="{{ route('site.newscat') }}"><span>НОВОСТИ</span></a></li>
                                <li class="dropdown-list"><a href="{{ route('site.cart') }}" class="number cart-icon"><img src="{{asset('dist/img/imagesSite/shop/cart.png')}}"><span class="total"></span> </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="main-content">
        @yield('content')
    </div>

    <footer class="overflow-hidden footer-default footer-style-1">
        <div class="footer-default__main-footer position-relative pb-5 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="company-info">
                                <div class="footer-logo"><a href="index.html"><img src="{{asset('dist/img/imagesSite/logo/logo-2.png')}}" alt=""></a></div>
                                <div class="text1">
                                    <p>© 2024 vortex. Все права защищены</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <ul class="footer-address-box">
                                <h4>8 (800) 555 35 35</h4>
                                <h4 style="color: #EB4242;">vortex@mail.ru</h4>
                                <h4>Калуга, Грабцевское шоссе 128</h4>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mt-30 wow fadeInUp animated">
                        <div class="footer-default__single-box">
                            <div class="footer-links">
                                <div class="text1 pt-3">
                                    <a href="{{ route('site.gpucat') }}">
                                        <h4>Каталог</h4>
                                    </a>
                                </div>
                                <div class="text2">
                                    <a href="{{ route('site.index') }}">
                                        <h4>О нас</h4>
                                    </a>
                                </div>
                                <div class="text3">
                                    <a href="{{ route('site.contacts') }}">
                                        <h4>Поддержка</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.buy-button').click(function (event) {
            event.preventDefault();
            let $button = $(this);
            let originalText = $button.text();
            $button.text('Добавлено');

            let title = $('.product-name').text().trim();
            let imageUrl = $('.main-image img').attr('src');
            let price = $('.product-price span').text().trim();
            let catalogType = $(this).data('catalog-type');

            addToCart(title, imageUrl, price, catalogType);

            setTimeout(function () {
                $button.text(originalText);
            }, 2000);
        });
    });

    function addToCart(title, imageUrl, price, catalogType) {
        var productId = $('.buy-button').data('id');

        $.ajax({
            url: "{{ route('addToCart') }}",
            type: "GET",
            data: {
                id: productId,
                title: title,
                image_url: imageUrl,
                price: price,
                catalog_type: catalogType
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log('Ответ от сервера:', data);
            },
            error: (xhr) => {
                console.error('Ошибка:', xhr.responseText);
            }
        });
    }
</script>

<script>
    $(document).ready(function () {
        $('.like-button').click(function (event) {
            event.preventDefault();
            let $button = $(this);
            let originalText = $button.text();
            $button.text('Добавлено');

            let title = $('.product-name').text().trim();
            let imageUrl = $('.main-image img').attr('src');
            let price = $('.product-price span').text().trim();
            let catalogType = $(this).data('catalog-type');

            addToLike(title, imageUrl, price, catalogType);

            setTimeout(function () {
                $button.text(originalText);
            }, 2000);
        });
    });

    function addToLike(title, imageUrl, price, catalogType) {
        var productId = $('.like-button').data('id');

        $.ajax({
            url: "{{ route('addToLike') }}",
            type: "GET",
            data: {
                id: productId,
                title: title,
                image_url: imageUrl,
                price: price,
                catalog_type: catalogType
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                console.log('Ответ от сервера:', data);
            },
            error: (xhr) => {
                console.error('Ошибка:', xhr.responseText);
            }
        });
    }
</script>
</html>
