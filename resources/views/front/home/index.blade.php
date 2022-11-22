@extends('front.layouts.main')


@section('seo_title', 'Main')

@section('seo_description', 'test')




@section('content')
  <section class="intro intro__home">
    <div class="intro__home-items">
      <div class="intro__home-items-inner">
        <img src="{{Vite::assets('intro_home.png')}}" alt="Интро">
        <span>
          <span>{{env('APP_NAME')}}</span>
        </span>
        <div>
          <img src="{{Vite::assets('logo.png')}}" alt="{{env('APP_NAME')}}Интро">
          <h4>{{env('APP_NAME')}}</h4>
        </div>
      </div>
    </div>

    
    <div class="container">
      <div class="intro__wrapper">
        <div class="intro__left">
          <h2>{!! $data['page']->subtitle !!}</h2>
          <button class="btn">Оставить заявку</button>
        </div>
      </div>
    </div>
  </section>

  <input type="hidden" id="page_id" value="{{$data['page']->id}}">


  <section class="services" id="services">
    @include('front.components.services', ['products'=>$data['products']])
  </section>
  
  @include('front.components.work', ['galleries'=> $data['gallery']])
  @include('front.components.benefits')
  @include('front.components.custom', ['page'=>$data['page']])
  @include('front.components.form')
@endsection

