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

  @include('front.components.svg')

</body>
</html>