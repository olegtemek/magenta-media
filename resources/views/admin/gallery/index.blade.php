@extends('admin.main')


@section('title')
Все фотографии в {{$page->title}}
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.gallery.create', $page->id) }}" class="btn btn-success">Добавить фотографию</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все фотографии</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Фотография</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($gallery as $photo)
            <tr>
              <td><img src="/{{$photo->image}}" style="max-width:200px" alt=""></td>
              <td>
                <a href="{{route('admin.gallery.edit', $photo->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.gallery.destroy', $photo->id)}}" method="post">
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