@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Главная</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <form action="{{ route('users.update', $users->id) }}" method="post">
              @csrf
              @method('patch')

            <div class="form-group">
                <input type="text" value="{{ $users->login ?? old('login') }}" name="login" class="form-control" placeholder="Логин">
            </div>

            <div class="form-group">
                <input type="text" value="{{ $users->name ?? old('name') }}" name="name" class="form-control" placeholder="Имя">
            </div>

            <div class="form-group">
                <input type="text" value="{{ $users->surname ?? old('surname') }}" name="surname" class="form-control" placeholder="Фамилия">
            </div>

            <div class="form-group">
                <input type="text" value="{{ $users->password ?? old('password') }}" name="password" class="form-control" placeholder="Пароль">
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Изменить">
            </div>

            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
