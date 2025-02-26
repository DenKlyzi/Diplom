@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Монитор</h1>
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
                        <a href="{{ route('monitors.edit', $monitors->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('monitors.delete', $monitors->id) }}" method="post">
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
                                    <td>{{ $monitors->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $monitors->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $monitors->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $monitors->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $monitors->count }}</td>
                                </tr>
                                <tr>
                                    <td>Диагональ</td>
                                    <td>{{ $monitors->diagonal }}</td>
                                </tr>
                                <tr>
                                    <td>Тип монитора</td>
                                    <td>{{ $monitors->monitor_type }}</td>
                                </tr>
                                <tr>
                                    <td>Макс. частота кадров</td>
                                    <td>{{ $monitors->frame_rate }}</td>
                                </tr>
                                <tr>
                                    <td>Игровой монитор</td>
                                    <td>{{ $monitors->game_monitor }}</td>
                                </tr>
                                <tr>
                                    <td>Время отклика</td>
                                    <td>{{ $monitors->response_time }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $monitors->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $monitors->category_id }}</td>
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
