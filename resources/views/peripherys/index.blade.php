@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Периферия</h1>
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
                      <a href="{{ route('peripherys.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Длина кабеля</th>
                                    <th>Вес упаковки</th>
                                    <th>Габариты упаковки</th>
                                    <th>Количество клавиш</th>
                                    <th>Гарантия</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($peripherycatalog as $peripherys)
                                <tr onclick="window.location='{{ route('peripherys.show', $peripherys->id) }}';">
                                    <td>{{ $peripherys->id }}</td>
                                    <td>{{ $peripherys->title }}</td>
                                    <td>{{ $peripherys->description }}</td>
                                    <td>{{ $peripherys->price }}</td>
                                    <td>{{ $peripherys->count }}</td>
                                    <td>{{ $peripherys->characteristicOne }}</td>
                                    <td>{{ $peripherys->characteristicTwo }}</td>
                                    <td>{{ $peripherys->characteristicThree }}</td>
                                    <td>{{ $peripherys->characteristicFour }}</td>
                                    <td>{{ $peripherys->characteristicFive }}</td>
                                    <td>{{ $peripherys->preview_image }}</td>
                                    <td>{{ $peripherys->category_id }}</td>
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
