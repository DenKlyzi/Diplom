@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить корпус</h1>
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
            <form action="{{ route('boxes.store') }}" method="post" enctype="multipart/form-data">
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
                    <label>Укажите типоразмер корпуса</label>
                    <input type="text" name="size_type" class="form-control" placeholder="Процессор">
                </div>

                <div class="form-group">
                    <label>Укажите длину</label>
                    <input type="text" name="length" class="form-control" placeholder="Длина">
                </div>

                <div class="form-group">
                    <label>Укажите ширину</label>
                    <input type="text" name="width" class="form-control" placeholder="Ширина">
                </div>

                <div class="form-group">
                    <label>Укажите высота</label>
                    <input type="text" name="height" class="form-control" placeholder="Высота">
                </div>

                <div class="form-group">
                    <label>Укажите вес</label>
                    <input type="text" name="weight" class="form-control" placeholder="Вес">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
