@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить ОЗУ</h1>
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
            <form action="{{ route('rams.update', $rams->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $rams->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $rams->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $rams->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $rams->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите тип памяти</label>
                    <input type="text" value="{{ $rams->memory_type }}" name="memory_type" class="form-control" placeholder="Тип памяти">
                </div>

                <div class="form-group">
                    <label>Сумарный объем памяти</label>
                    <input type="text" value="{{ $rams->total_volume }}" name="total_volume" class="form-control" placeholder="Объем">
                </div>

                <div class="form-group">
                    <label>Объем одного модуля</label>
                    <input type="text" value="{{ $rams->volume }}" name="volume" class="form-control" placeholder="Объем одного модуля">
                </div>

                <div class="form-group">
                    <label>Укажите тактовую частоту</label>
                    <input type="text" value="{{ $rams->tick_rate }}" name="tick_rate" class="form-control" placeholder="Тактовая частота">
                </div>

                <div class="form-group">
                    <label>Укажите напряжение питания</label>
                        <input type="text" value="{{ $rams->voltage }}" name="voltage" class="form-control" placeholder="Напряжение">
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
