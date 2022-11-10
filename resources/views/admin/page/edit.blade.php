@extends('admin.main')


@section('title')
Создать Страницу
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.page.update', $item->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <h2 class="col-sm-12">Основные настройки страницы</h2>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Заголовок</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->title }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>Подзаголовок (необязательное поле)</label>
              @error('subtitle')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->subtitle }}" class="form-control" name="subtitle" placeholder="Подзаголовок">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для блока</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $item->image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-12 row mt-4 mb-4">
          <h2 class="col-sm-12">Настройки блока "Изготовление под заказ"</h2>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Заголовок</label>
              @error('custom_title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->custom_title }}" class="form-control" name="custom_title" placeholder="Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>Описание</label>
              @error('custom_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->custom_description }}" class="form-control" name="custom_description" placeholder="Описание">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('custom_image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для блока</label>
                <input type="text" class="form-control" id="custom_image" name="custom_image" value="{{ $item->custom_image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="custom_image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-sm-12 row mt-4">
          <h2 class="col-sm-12">Seo (необязательно)</h2>
          <div class="col-sm-4">
            <div class="form-group">
              <label>SEO Заголовок</label>
              @error('seo_title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->seo_title }}" class="form-control" name="seo_title" placeholder="SEO Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>SEO Описание</label>
              @error('seo_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->seo_description }}" class="form-control" name="seo_description" placeholder="SEO Описание">
            </div>
          </div>
        </div>


      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить страницу</button>
      </div>    
    </div>
  </form>
</div>

@endsection