<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}} || @yield('seo_title')</title>
  <meta name="description" content="@yield('seo_description')">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://mapgl.2gis.com/api/js/v1"></script>
  @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body>
  
  @include('front.components.header')
  @include('front.components.menu')

  @yield('content')

  @include('front.components.about')
  @include('front.components.insta')
  @include('front.components.select', ['pages'=>$global_data['pages']])
  @include('front.components.footer', ['pages'=>$global_data['pages']])

  @yield('js')


  <div class="modal">
    <div class="modal__wrapper">
      <h3>Оставить заявку</h3>
      <div class="close">&#9587;</div>
      <div class="modal__input">
        <span>Это поле обязательно для заполнения</span>
        <input type="text" placeholder="Имя" name="name">
      </div>
      <div class="modal__input">
        <span>Это поле обязательно для заполнения</span>
        <input type="text" class="input_number" placeholder="Телефон" name="number">
      </div>
      <div class=""><button class="btn send-simple">Отправить</button></div>
    </div>
  </div>

  <div class="modal modal-product">
    <div class="modal__wrapper">
      <h3>Оставить заявку</h3>
      <div class="close close-product">&#9587;</div>
      <div class="modal__input">
        <span>Это поле обязательно для заполнения</span>
        <input type="text" placeholder="Имя" name="name">
      </div>
      <div class="modal__input">
        <span>Это поле обязательно для заполнения</span>
        <input type="text" class="input_number" placeholder="Телефон" name="number">
      </div>
      <div class=""><button class="btn send-simple">Отправить</button></div>
    </div>
  </div>

  @include('front.components.svg')

</body>
</html>