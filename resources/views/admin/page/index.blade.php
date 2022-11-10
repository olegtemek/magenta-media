@extends('admin.main')


@section('title')
Все страницы
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.page.create')}}" class="btn btn-success">Создать новую страницу</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все страницы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#id</th>
                <th>Заголовок</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($pages as $page)
            <tr>
              <td>{{$page->id}}</td>
              <td>{{$page->title}}</td>
              <td>
                <a href="{{route('admin.page.edit', $page->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.page.destroy', $page->id)}}" method="post">
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