@extends('admin.main')


@section('title')
Все товары в {{$page->title}}
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.product.create', $page->id) }}" class="btn btn-success">Создать новый товар</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все страницы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название товара</th>
                <th>Цена</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>{{$product->title}}</td>
              <td>{{number_format($product->price, 0, '.', ' ')}}</td>
              <td>
                <a href="{{route('admin.product.edit', $product->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.product.destroy', $product->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection