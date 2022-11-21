<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}} || @yield('seo_title')</title>
  <meta name="description" content="@yield('seo_description')">
  <script src="http://maps.api.2gis.ru/2.0/loader.js?pkg=full&skin=dark"></script>
  @vite(['resources/js/app.js', 'resources/scss/app.scss'])
</head>
<body>
  
  @include('front.components.header')
  @include('front.components.menu')

  @yield('content')

  @include('front.components.about')
  @include('front.components.select', ['pages'=>$global_data['pages']])
  
  @include('front.components.footer', ['pages'=>$global_data['pages']])

  @yield('js')

  @include('front.components.svg')


</body>
</html>