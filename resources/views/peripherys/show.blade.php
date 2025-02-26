@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Периферия</h1>
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

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-3">
                      <div class="mr-2">
                        <a href="{{ route('peripherys.edit', $peripherys->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('peripherys.delete', $peripherys->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                      </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $peripherys->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $peripherys->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $peripherys->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $peripherys->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $peripherys->count }}</td>
                                </tr>
                                <tr>
                                    <td>Длина кабеля</td>
                                    <td>{{ $peripherys->characteristicOne }}</td>
                                </tr>
                                <tr>
                                    <td>Вес упаковки</td>
                                    <td>{{ $peripherys->characteristicTwo }}</td>
                                </tr>
                                <tr>
                                    <td>Габариты упаковки</td>
                                    <td>{{ $peripherys->characteristicThree }}</td>
                                </tr>
                                <tr>
                                    <td>Количество клавиш</td>
                                    <td>{{ $peripherys->characteristicFour }}</td>
                                </tr>
                                <tr>
                                    <td>Гарантия</td>
                                    <td>{{ $peripherys->characteristicFive }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $peripherys->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $peripherys->category_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
