@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Корпуса</h1>
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
                      <a href="{{ route('boxes.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Типоразмер корпуса</th>
                                    <th>Длина</th>
                                    <th>Ширина</th>
                                    <th>Высота</th>
                                    <th>Вес</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($boxcatalog as $boxes)
                                <tr onclick="window.location='{{ route('boxes.show', $boxes->id) }}';">
                                    <td>{{ $boxes->id }}</td>
                                    <td>{{ $boxes->title }}</td>
                                    <td>{{ $boxes->description }}</td>
                                    <td>{{ $boxes->price }}</td>
                                    <td>{{ $boxes->size_type }}</td>
                                    <td>{{ $boxes->length }}</td>
                                    <td>{{ $boxes->width }}</td>
                                    <td>{{ $boxes->height }}</td>
                                    <td>{{ $boxes->weight }}</td>
                                    <td>{{ $boxes->power_unit }}</td>
                                    <td>{{ $boxes->preview_image }}</td>
                                    <td>{{ $boxes->category_id }}</td>
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
