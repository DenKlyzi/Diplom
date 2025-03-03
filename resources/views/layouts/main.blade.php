<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vortex</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/VortexLogo.png')}}" alt="VortexLogo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="text-align: center">
      <span class="brand-text font-weight-light"><img src="{{asset('dist/img/VortexLogo.png')}}" alt="VortexLogo"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <li class="nav-item">
                <a href="{{ route('orders.index') }}" class="nav-link">
                <i class="nav-icon fas fa-shopping-bag"></i>
                <p>Заказы</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('products.index') }}" class="nav-link">
                <i class="nav-icon fas fa-solid fa-laptop"></i>
                <p>Готовые сборки</p>
              </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('gpus.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-gamepad"></i>
                    <p>Видеокарты</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('cpus.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-microchip"></i>
                    <p>Процессоры</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('rams.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-memory"></i>
                    <p>ОЗУ</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('boxes.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-window-maximize"></i>
                    <p>Корпуса</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('monitors.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-desktop"></i>
                    <p>Мониторы</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('peripherys.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-regular fa-keyboard"></i>
                    <p>Периферия</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('others.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-solid fa-thermometer"></i>
                    <p>Другое</p>
                </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>Категории</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Пользователи</p>
              </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('news.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    <p>Новости</p>
                </a>
            </li>
        </ul>
          <div class="d-flex flex-column align-items-center">
              <button class="btn btn-danger btn-sm w-50 mt-3"><a href="{{route('site.logout')}}" style="color: white;">Выйти</a></button>
          </div>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date("Y") }} <a href="{{ route('main.index') }}">VORTEX</a>.</strong>
    Все права защищены.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script>
    $('.tags').select2()
    $('.colors').select2()
</script>
</body>
</html>
