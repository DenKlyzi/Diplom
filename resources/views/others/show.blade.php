@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Другое</h1>
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
                        <a href="{{ route('others.edit', $others->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('others.delete', $others->id) }}" method="post">
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
                                    <td>{{ $others->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $others->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $others->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $others->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $others->count }}</td>
                                </tr>
                                <tr>
                                    <td>Бренд</td>
                                    <td>{{ $others->characteristicOne }}</td>
                                </tr>
                                <tr>
                                    <td>Тип товара</td>
                                    <td>{{ $others->characteristicTwo }}</td>
                                </tr>
                                <tr>
                                    <td>Вес упаковки</td>
                                    <td>{{ $others->characteristicThree }}</td>
                                </tr>
                                <tr>
                                    <td>Габариты упаковки</td>
                                    <td>{{ $others->characteristicFour }}</td>
                                </tr>
                                <tr>
                                    <td>Гарантия</td>
                                    <td>{{ $others->characteristicFive }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $others->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $others->category_id }}</td>
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
