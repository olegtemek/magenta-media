@extends('admin.main')


@section('title')
Настройки
@endsection

@section('content')

<div class="card-body">
  <form method="POST" action="{{ route('admin.setting.update', $item->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Номер телефона</label>
              @error('number')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->number }}" class="form-control" name="number" placeholder="Номер телефона">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Номер телефона whatsapp</label>
              @error('number_whatsapp')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->number_whatsapp }}" class="form-control" name="number_whatsapp" placeholder="Номер телефона whatsapp">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Емейл</label>
              @error('email')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->email }}" class="form-control" name="email" placeholder="Емейл">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Адресс</label>
              @error('address')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->address }}" class="form-control" name="address" placeholder="Адресс">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Название instagram аккаунта</label>
              @error('instagram')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $item->instagram }}" class="form-control" name="instagram" placeholder="Название instagram аккаунта">
            </div>
          </div>
    
          
        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Сохранить настройки</button>
      </div>    
    </div>
  </form>
</div>

@endsection