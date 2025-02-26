@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить сборку</h1>
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
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label>Укажите наименование</label>
                <input type="text" name="title" class="form-control" placeholder="Наименование">
              </div>

                <div class="form-group">
                    <label>Напишите описание</label>
                    <input type="text" name="description" class="form-control" placeholder="Описание">
                </div>

                <div class="form-group">
                    <label>Укажите цену</label>
                    <input type="text" name="price" class="form-control" placeholder="Цена">
                </div>

                <div class="form-group">
                    <label>Укажите количество</label>
                    <input type="text" name="count" class="form-control" placeholder="Количество">
                </div>

                <div class="form-group">
                    <label>Укажите процессор</label>
                    <input type="text" name="cpu" class="form-control" placeholder="Процессор">
                </div>

                <div class="form-group">
                    <label>Укажите видеокарту</label>
                    <input type="text" name="gpu" class="form-control" placeholder="Видеокарта">
                </div>

                <div class="form-group">
                    <label>Укажите количество ОЗУ</label>
                    <input type="text" name="ram" class="form-control" placeholder="ОЗУ">
                </div>

                <div class="form-group">
                    <label>Укажите кол-во памяти</label>
                    <input type="text" name="memory" class="form-control" placeholder="Память">
                </div>

                <div class="form-group">
                    <label>Укажите материнскую плату</label>
                    <input type="text" name="motherboard" class="form-control" placeholder="Материнская плата">
                </div>

                <div class="form-group">
                    <label>Укажите охлаждение</label>
                    <input type="text" name="cooling" class="form-control" placeholder="Охлаждение">
                </div>

                <div class="form-group">
                    <label>Укажите вольтаж</label>
                    <input type="text" name="power_unit" class="form-control" placeholder="Вольтаж">
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">Добавьте фото</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберете файл</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Выберете категорию</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>
        </div>
      </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('exampleInputFile');
            const fileLabel = fileInput.nextElementSibling;

            fileInput.addEventListener('change', function() {
                const fileName = fileInput.files[0] ? fileInput.files[0].name : "Выберите файл";
                fileLabel.textContent = fileName;
            });
        });
    </script>
@endsection
