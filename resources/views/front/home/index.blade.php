@extends('front.layouts.main')


@section('seo_title', $data['page']->seo_title)

@section('seo_description', $data['page']->seo_description)




@section('content')
  <section class="intro intro__home parallax">
    <div class="intro__home-items">
      <div class="intro__home-items-inner parallax-item">
        <img src="{{Vite::asset('resources/assets/intro1.png')}}" alt="Интро">
        <span>
          <span>{{env('APP_NAME')}}</span>
        </span>
        <div>
          <img src="{{Vite::asset('resources/assets/logo.png')}}" alt="{{env('APP_NAME')}}Интро">
          <h4>{{env('APP_NAME')}}</h4>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="intro__wrapper">
        <div class="intro__left">
          <h2>{!! $data['page']->subtitle !!}</h2>
          <button class="btn open-simple">Оставить заявку</button>
        </div>
      </div>
    </div>
  </section>

  <input type="hidden" id="page_id" value="{{$data['page']->id}}">


  <section class="services" id="services">

<div class="container">
  <h2 class="title">Наши услуги</h2>
  <div class="services__wrapper" id="products">
    @include('front.components.products', ['products'=>$data['products']])
  </div>
    <button id="products_more">
      Смотреть еще
    </button>
  </div>

    
  </section>
  
  @include('front.components.work', ['galleries'=> $data['gallery']])
  @include('front.components.benefits')
  @include('front.components.custom', ['page'=>$data['page']])
  @include('front.components.form')
@endsection

