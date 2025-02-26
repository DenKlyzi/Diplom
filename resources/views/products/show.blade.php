@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Готовые сборки</h1>
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

            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-3">
                      <div class="mr-2">
                        <a href="{{ route('products.edit', $products->id) }}" class="btn btn-primary">Редактировать</a>
                      </div>
                      <form action="{{ route('products.delete', $products->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Удалить">
                      </form>
                    </div>

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $products->id }}</td>
                                </tr>
                                <tr>
                                    <td>Наименование</td>
                                    <td>{{ $products->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $products->description }}</td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $products->price }}</td>
                                </tr>
                                <tr>
                                    <td>Количество</td>
                                    <td>{{ $products->count }}</td>
                                </tr>
                                <tr>
                                    <td>Процессор</td>
                                    <td>{{ $products->cpu }}</td>
                                </tr>
                                <tr>
                                    <td>Видеокарта</td>
                                    <td>{{ $products->gpu }}</td>
                                </tr>
                                <tr>
                                    <td>ОЗУ</td>
                                    <td>{{ $products->ram }}</td>
                                </tr>
                                <tr>
                                    <td>Память</td>
                                    <td>{{ $products->memory }}</td>
                                </tr>
                                <tr>
                                    <td>Материнская плата</td>
                                    <td>{{ $products->motherboard }}</td>
                                </tr>
                                <tr>
                                    <td>Охлаждение</td>
                                    <td>{{ $products->cooling }}</td>
                                </tr>
                                <tr>
                                    <td>Вольтаж</td>
                                    <td>{{ $products->power_unit }}</td>
                                </tr>
                                <tr>
                                    <td>Фото</td>
                                    <td>{{ $products->preview_image }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $products->category_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- /.container-fluid -->
  </section>
@endsection
