@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Видеокарты</h1>
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
                      <a href="{{ route('gpus.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Частота работы видеочипа</th>
                                    <th>Турбочастота</th>
                                    <th>Интерфейс подключения</th>
                                    <th>Видеопамять</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($gpucatalog as $gpus)
                                <tr onclick="window.location='{{ route('gpus.show', $gpus->id) }}';">
                                    <td>{{ $gpus->id }}</td>
                                    <td>{{ $gpus->title }}</td>
                                    <td>{{ $gpus->description }}</td>
                                    <td>{{ $gpus->price }}</td>
                                    <td>{{ $gpus->count }}</td>
                                    <td>{{ $gpus->tick_rate }}</td>
                                    <td>{{ $gpus->turbo_rate }}</td>
                                    <td>{{ $gpus->connect_port }}</td>
                                    <td>{{ $gpus->video_memory }}</td>
                                    <td>{{ $gpus->preview_image }}</td>
                                    <td>{{ $gpus->category_id }}</td>
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
