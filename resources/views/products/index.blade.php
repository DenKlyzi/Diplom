@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Готовые сборки</h1>
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
                      <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить</a>
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
                                    <th>Процессор</th>
                                    <th>Видеокарта</th>
                                    <th>ОЗУ</th>
                                    <th>Память</th>
                                    <th>Материнская плата</th>
                                    <th>Охлаждение</th>
                                    <th>Вольтаж</th>
                                    <th>Фото</th>
                                    <th>Категория</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($product as $products)
                                <tr onclick="window.location='{{ route('products.show', $products->id) }}';">
                                    <td>{{ $products->id }}</td>
                                    <td>{{ $products->title }}</td>
                                    <td>{{ $products->description }}</td>
                                    <td>{{ $products->price }}</td>
                                    <td>{{ $products->count }}</td>
                                    <td>{{ $products->cpu }}</td>
                                    <td>{{ $products->gpu }}</td>
                                    <td>{{ $products->ram }}</td>
                                    <td>{{ $products->memory }}</td>
                                    <td>{{ $products->motherboard }}</td>
                                    <td>{{ $products->cooling }}</td>
                                    <td>{{ $products->power_unit }}</td>
                                    <td>{{ $products->preview_image }}</td>
                                    <td>{{ $products->category_id }}</td>
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
