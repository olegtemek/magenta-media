@extends('admin.main')


@section('title')
Создать Страницу
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.page.store') }}">
    @csrf
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
              <input type="text" value="{{ old('title') }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Краткое описание(необязательно)</label>
              @error('description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('description') }}" class="form-control" name="description" placeholder="Краткое описание(необязательно)">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>Подзаголовок</label>
              @error('subtitle')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('subtitle') }}" class="form-control" name="subtitle" placeholder="Подзаголовок">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для блока</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
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
              <input type="text" value="{{ old('custom_title') }}" class="form-control" name="custom_title" placeholder="Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>Описание</label>
              @error('custom_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('custom_description') }}" class="form-control" name="custom_description" placeholder="Описание">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('custom_image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для блока</label>
                <input type="text" class="form-control" id="custom_image" name="custom_image" value="{{ old('custom_image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="custom_image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-12 row mt-4 mb-4">
          <h2 class="col-sm-12">Настройки блока "Интро(необязательно)"</h2>
          <div class="col-sm-6">
            <div class="form-group">
              @error('intro_bg')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для всего блока</label>
                <input type="text" class="form-control" id="intro_bg" name="intro_bg" value="{{ old('intro_bg') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="intro_bg"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('intro_bg_cover')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-4 input-group">
                <label style="display: block; width:100%">Изображение для анимации</label>
                <input type="text" class="form-control" id="intro_bg_cover" name="intro_bg_cover" value="{{ old('intro_bg_cover') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="intro_bg_cover"><i class="fas fa-file"></i></a>
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
              <input type="text" value="{{ old('seo_title') }}" class="form-control" name="seo_title" placeholder="SEO Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>SEO Описание</label>
              @error('seo_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('seo_description') }}" class="form-control" name="seo_description" placeholder="SEO Описание">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>SEO текст</label>
              @error('seo_text')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="seo_text" style="min-height:200px;" class="form-control" placeholder="Seo текст">{{old('seo_text')}}</textarea>
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