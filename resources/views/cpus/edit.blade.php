@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить корпус</h1>
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
            <form action="{{ route('cpus.update', $cpus->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $cpus->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $cpus->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $cpus->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $cpus->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите модель процессора</label>
                    <input type="text" value="{{ $cpus->model }}" name="model" class="form-control" placeholder="Модель">
                </div>

                <div class="form-group">
                    <label>Укажите сокет процессора</label>
                    <input type="text" value="{{ $cpus->socket }}" name="socket" class="form-control" placeholder="Сокет">
                </div>

                <div class="form-group">
                    <label>Укажите дату релиза процессора</label>
                    <input type="text" value="{{ $cpus->release }}" name="release" class="form-control" placeholder="Дата релиза">
                </div>

                <div class="form-group">
                    <label>Укажите количество ядер</label>
                    <input type="text" value="{{ $cpus->cores }}" name="cores" class="form-control" placeholder="Кол-во ядер">
                </div>

                <div class="form-group">
                    <label>Укажите количество потоков</label>
                    <input type="text" value="{{ $cpus->streams }}" name="streams" class="form-control" placeholder="Кол-во потоков">
                </div>

                <div class="form-group">
                    <label>Выберите категорию</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Изменить">
              </div>
            </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
