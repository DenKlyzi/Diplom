@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Мониторы</h1>
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
                    <div class="card-header">
                      <a href="{{ route('monitors.create') }}" class="btn btn-primary">Добавить</a>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Описание</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Диагональ</th>
                                    <th>Тип монитора</th>
                                    <th>Макс. частота кадров</th>
                                    <th>Игровой монитор</th>
                                    <th>Время отклика</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($monitorcatalog as $monitors)
                                <tr onclick="window.location='{{ route('monitors.show', $monitors->id) }}';">
                                    <td>{{ $monitors->id }}</td>
                                    <td>{{ $monitors->title }}</td>
                                    <td>{{ $monitors->description }}</td>
                                    <td>{{ $monitors->price }}</td>
                                    <td>{{ $monitors->count }}</td>
                                    <td>{{ $monitors->diagonal }}</td>
                                    <td>{{ $monitors->monitor_type }}</td>
                                    <td>{{ $monitors->frame_rate }}</td>
                                    <td>{{ $monitors->game_monitor }}</td>
                                    <td>{{ $monitors->response_time }}</td>
                                    <td>{{ $monitors->preview_image }}</td>
                                    <td>{{ $monitors->category_id }}</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
