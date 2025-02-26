@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить видеокарту</h1>
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
            <form action="{{ route('gpus.update', $gpus->id) }}" method="post">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $gpus->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $gpus->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $gpus->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $gpus->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите частоту работы видеочипа</label>
                    <input type="text" value="{{ $gpus->tick_rate }}" name="tick_rate" class="form-control" placeholder="Частота работы видеочипа">
                </div>

                <div class="form-group">
                    <label>Укажите турбочастоту</label>
                    <input type="text" value="{{ $gpus->turbo_rate }}" name="turbo_rate" class="form-control" placeholder="Турбочастота">
                </div>

                <div class="form-group">
                    <label>Укажите интерфейс подключения</label>
                    <input type="text" value="{{ $gpus->connect_port }}" name="connect_port" class="form-control" placeholder="Интерфейс подключения">
                </div>

                <div class="form-group">
                    <label>Укажите объем видеопамяти</label>
                    <input type="text" value="{{ $gpus->video_memory }}" name="video_memory" class="form-control" placeholder="Видеопамять">
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
