@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Новости</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Новости</li>
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
                      <a href="{{ route('news.create') }}" class="btn btn-primary">Добавить</a>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th>Фото</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($newscatalog as $news)
                                <tr onclick="window.location='{{ route('news.show', $news->id) }}';">
                                    <td>{{ $news->id }}</td>
                                    <td>{{ $news->title }}</td>
                                    <td>{{ $news->description }}</td>
                                    <td>{{ $news->price }}</td>
                                    <td>{{ $news->count }}</td>
                                    <td>{{ $news->memory_type }}</td>
                                    <td>{{ $news->total_volume }}</td>
                                    <td>{{ $news->volume }}</td>
                                    <td>{{ $news->tick_rate }}</td>
                                    <td>{{ $news->voltage }}</td>
                                    <td>{{ $news->preview_image }}</td>
                                    <td>{{ $news->category_id }}</td>
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
