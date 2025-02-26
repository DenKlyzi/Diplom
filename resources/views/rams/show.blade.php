@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ОЗУ</h1>
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
                        <a href="{{ route('rams.edit', $rams->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('rams.delete', $rams->id) }}" method="post">
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
                                    <td>{{ $rams->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $rams->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $rams->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $rams->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $rams->count }}</td>
                                </tr>
                                <tr>
                                    <td>Тип памяти</td>
                                    <td>{{ $rams->memory_type }}</td>
                                </tr>
                                <tr>
                                    <td>Суммарный объем памяти</td>
                                    <td>{{ $rams->total_volume }}</td>
                                </tr>
                                <tr>
                                    <td>Объем одного модуля</td>
                                    <td>{{ $rams->volume }}</td>
                                </tr>
                                <tr>
                                    <td>Тактовая частота</td>
                                    <td>{{ $rams->tick_rate }}</td>
                                </tr>
                                <tr>
                                    <td>Напряжение питания</td>
                                    <td>{{ $rams->voltage }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $rams->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $rams->category_id }}</td>
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
