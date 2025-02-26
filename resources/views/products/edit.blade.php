@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Изменить сборку</h1>
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
            <form action="{{ route('products.update', $products->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label>Укажите наименование</label>
                    <input type="text" value="{{ $products->title }}" name="title" class="form-control" placeholder="Наименование">
                </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" value="{{ $products->description }}" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" value="{{ $products->price }}" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" value="{{ $products->count }}" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите процессор</label>
                    <input type="text" value="{{ $products->cpu }}" name="cpu" class="form-control" placeholder="Процессор">
                </div>

                <div class="form-group">
                    <label>Укажите видеокарту</label>
                    <input type="text" value="{{ $products->gpu }}" name="gpu" class="form-control" placeholder="Видеокарта">
                </div>

                <div class="form-group">
                    <label>Укажите кол-во ОЗУ</label>
                    <input type="text" value="{{ $products->ram }}" name="ram" class="form-control" placeholder="ОЗУ">
                </div>

                <div class="form-group">
                    <label>Укажите кол-во памяти</label>
                    <input type="text" value="{{ $products->memory }}" name="memory" class="form-control" placeholder="Память">
                </div>

                <div class="form-group">
                    <label>Укажите материнскую плату</label>
                    <input type="text" value="{{ $products->motherboard }}" name="motherboard" class="form-control" placeholder="Материнская плата">
                </div>

                <div class="form-group">
                    <label>Укажите охлаждение</label>
                    <input type="text" value="{{ $products->cooling }}" name="cooling" class="form-control" placeholder="Охлаждение">
                </div>

                <div class="form-group">
                    <label>Укажите вольтаж</label>
                    <input type="text" value="{{ $products->power_unit }}" name="power_unit" class="form-control" placeholder="Вольтаж">
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
