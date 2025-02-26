@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Процессоры</h1>
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
                      <a href="{{ route('cpus.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Модель</th>
                                    <th>Сокет</th>
                                    <th>Дата релиза</th>
                                    <th>Ядра</th>
                                    <th>Потоки</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($cpucatalog as $cpus)
                                <tr onclick="window.location='{{ route('cpus.show', $cpus->id) }}';">
                                    <td>{{ $cpus->id }}</td>
                                    <td>{{ $cpus->title }}</td>
                                    <td>{{ $cpus->description }}</td>
                                    <td>{{ $cpus->price }}</td>
                                    <td>{{ $cpus->count }}</td>
                                    <td>{{ $cpus->model }}</td>
                                    <td>{{ $cpus->socket }}</td>
                                    <td>{{ $cpus->release }}</td>
                                    <td>{{ $cpus->cores }}</td>
                                    <td>{{ $cpus->streams }}</td>
                                    <td>{{ $cpus->preview_image }}</td>
                                    <td>{{ $cpus->category_id }}</td>
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
