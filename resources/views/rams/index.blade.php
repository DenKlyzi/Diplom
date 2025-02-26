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
                    <div class="card-header">
                      <a href="{{ route('rams.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Тип памяти</th>
                                    <th>Суммарный объем памяти</th>
                                    <th>Объем одного модуля</th>
                                    <th>Тактовая частота</th>
                                    <th>Напряжение питания</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($ramcatalog as $rams)
                                <tr onclick="window.location='{{ route('rams.show', $rams->id) }}';">
                                    <td>{{ $rams->id }}</td>
                                    <td>{{ $rams->title }}</td>
                                    <td>{{ $rams->description }}</td>
                                    <td>{{ $rams->price }}</td>
                                    <td>{{ $rams->count }}</td>
                                    <td>{{ $rams->memory_type }}</td>
                                    <td>{{ $rams->total_volume }}</td>
                                    <td>{{ $rams->volume }}</td>
                                    <td>{{ $rams->tick_rate }}</td>
                                    <td>{{ $rams->voltage }}</td>
                                    <td>{{ $rams->preview_image }}</td>
                                    <td>{{ $rams->category_id }}</td>
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
