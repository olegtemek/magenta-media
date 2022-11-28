<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}} || @yield('seo_title')</title>
  <meta name="description" content="@yield('seo_description')">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body>
  
  <input type="hidden" class="page_id" value="{{$data['page']->id}}">
  @include('front.components.header')
  @include('front.components.menu')

  @yield('content')

  @include('front.components.about')
  @include('front.components.insta')
  @if ($data['page']->seo_text)
      <div class="seo__text">
        <div class="container">
          {!! $data['page']->seo_text !!}
        </div>
      </div>
  @endif
  @include('front.components.footer', ['pages'=>$global_data['pages']])

  @yield('js')

  

  <a class="whatsapp_bottom" href="https://wa.me/{{$global_data['settings']->number_whatsapp}}?text=Здравствуйте" target="_blank">
    <svg class="icon">
      <use xlink:href="#whatsapp"></use>
    </svg> 
  </a>

  @include('front.components.svg')

</body>
</html>