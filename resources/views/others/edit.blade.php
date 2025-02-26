@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить другое</h1>
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
            <form action="{{ route('others.update', $others->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $others->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $others->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $others->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $others->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите бренд</label>
                    <input type="text" value="{{ $others->characteristicOne }}" name="characteristicOne" class="form-control" placeholder="Бренд">
                </div>

                <div class="form-group">
                    <label>Тип товара</label>
                    <input type="text" value="{{ $others->characteristicTwo }}" name="characteristicTwo" class="form-control" placeholder="Тип">
                </div>

                <div class="form-group">
                    <label>Вес упаковки</label>
                    <input type="text" value="{{ $others->characteristicThree }}" name="characteristicThree" class="form-control" placeholder="Вес">
                </div>

                <div class="form-group">
                    <label>Габариты упаковки</label>
                    <input type="text" value="{{ $others->characteristicFour }}" name="characteristicFour" class="form-control" placeholder="Габариты">
                </div>

                <div class="form-group">
                    <label>Гарантия</label>
                    <input type="text" value="{{ $others->characteristicFive }}" name="characteristicFive" class="form-control" placeholder="Гарантия">
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
