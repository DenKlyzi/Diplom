@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Другое</h1>
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
                      <a href="{{ route('others.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Бренд</th>
                                    <th>Тип товара</th>
                                    <th>Вес упаковки</th>
                                    <th>Габариты упаковки</th>
                                    <th>Гарантия</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($othercatalog as $others)
                                <tr onclick="window.location='{{ route('others.show', $others->id) }}';">
                                    <td>{{ $others->id }}</td>
                                    <td>{{ $others->title }}</td>
                                    <td>{{ $others->description }}</td>
                                    <td>{{ $others->price }}</td>
                                    <td>{{ $others->count }}</td>
                                    <td>{{ $others->characteristicOne }}</td>
                                    <td>{{ $others->characteristicTwo }}</td>
                                    <td>{{ $others->characteristicThree }}</td>
                                    <td>{{ $others->characteristicFour }}</td>
                                    <td>{{ $others->characteristicFive }}</td>
                                    <td>{{ $others->preview_image }}</td>
                                    <td>{{ $others->category_id }}</td>
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
