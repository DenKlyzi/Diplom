@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Видеокарта</h1>
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
                        <a href="{{ route('gpus.edit', $gpus->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('gpus.delete', $gpus->id) }}" method="post">
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
                                    <td>{{ $gpus->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $gpus->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $gpus->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $gpus->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $gpus->count }}</td>
                                </tr>
                                <tr>
                                    <td>Частота работы видеочипа</td>
                                    <td>{{ $gpus->tick_rate }}</td>
                                </tr>
                                <tr>
                                    <td>Турбочастота</td>
                                    <td>{{ $gpus->turbo_rate }}</td>
                                </tr>
                                <tr>
                                    <td>Интерфейс подключения</td>
                                    <td>{{ $gpus->connect_port }}</td>
                                </tr>
                                <tr>
                                    <td>Видеопамять</td>
                                    <td>{{ $gpus->video_memory }}</td>
                                </tr>
                                <tr>
                                    <td>Материнская плата</td>
                                    <td>{{ $gpus->category_id }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $gpus->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $gpus->category_id }}</td>
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
