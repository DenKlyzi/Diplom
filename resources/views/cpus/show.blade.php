@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Процессор</h1>
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
                        <a href="{{ route('cpus.edit', $cpus->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('cpus.delete', $cpus->id) }}" method="post">
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
                                    <td>{{ $cpus->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $cpus->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $cpus->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $cpus->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $cpus->count }}</td>
                                </tr>
                                <tr>
                                    <td>Модель</td>
                                    <td>{{ $cpus->model }}</td>
                                </tr>
                                <tr>
                                    <td>Сокет</td>
                                    <td>{{ $cpus->socket }}</td>
                                </tr>
                                <tr>
                                    <td>Дата релиза</td>
                                    <td>{{ $cpus->release }}</td>
                                </tr>
                                <tr>
                                    <td>Ядра</td>
                                    <td>{{ $cpus->cores }}</td>
                                </tr>
                                <tr>
                                    <td>Потоки</td>
                                    <td>{{ $cpus->streams }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $cpus->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $cpus->category_id }}</td>
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
