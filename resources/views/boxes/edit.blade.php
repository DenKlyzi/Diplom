@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить категорию</h1>
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
            <form action="{{ route('boxes.update', $boxes->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $boxes->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $boxes->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $boxes->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $boxes->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите типоразмер корпуса</label>
                    <input type="text" value="{{ $boxes->size_type }}" name="size_type" class="form-control" placeholder="Типоразмер">
                </div>

                <div class="form-group">
                    <label>Укажите длину</label>
                    <input type="text" value="{{ $boxes->length }}" name="length" class="form-control" placeholder="Длина">
                </div>

                <div class="form-group">
                    <label>Укажите ширину</label>
                    <input type="text" value="{{ $boxes->width }}" name="width" class="form-control" placeholder="Ширина">
                </div>

                <div class="form-group">
                    <label>Укажите высоту</label>
                    <input type="text" value="{{ $boxes->height }}" name="height" class="form-control" placeholder="Высота">
                </div>

                <div class="form-group">
                    <label>Укажите вес</label>
                    <input type="text" value="{{ $boxes->weight }}" name="weight" class="form-control" placeholder="Вес">
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
