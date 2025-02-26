@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить монитор</h1>
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
            <form action="{{ route('monitors.update', $monitors->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $monitors->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $monitors->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $monitors->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $monitors->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите диагональ монитора</label>
                    <input type="text" value="{{ $monitors->diagonal }}" name="diagonal" class="form-control" placeholder="Диагональ">
                </div>

                <div class="form-group">
                    <label>Укажите тип монитора</label>
                    <input type="text" value="{{ $monitors->monitor_type }}" name="monitor_type" class="form-control" placeholder="Тип">
                </div>

                <div class="form-group">
                    <label>Укажите макс. частоту кадров</label>
                    <input type="text" value="{{ $monitors->frame_rate }}" name="frame_rate" class="form-control" placeholder="Частота кадров">
                </div>

                <div class="form-group">
                    <label>Игровой монитор</label>
                    <input type="text" value="{{ $monitors->game_monitor }}" name="game_monitor" class="form-control" placeholder="Да/Нет">
                </div>

                <div class="form-group">
                    <label>Время отклика</label>
                    <input type="text" value="{{ $monitors->response_time }}" name="response_time" class="form-control" placeholder="Время отклика">
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
