@extends('admin.main')


@section('title')
Создать товар
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.product.update', $item->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Название</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->title }}" class="form-control" name="title" placeholder="Название">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>Цена (можно не указывать, тогда подставиться цена, как уточняйте)</label>
              @error('price')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->price }}" class="form-control" name="price" placeholder="Цена">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $item->image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить товар</button>
      </div>    
    </div>
  </form>
</div>

@endsection