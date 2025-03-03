@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить новость</h1>
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
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
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
