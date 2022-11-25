@extends('front.layouts.main')


@section('seo_title', $data['page']->seo_title)

@section('seo_description', $data['page']->seo_description)




@section('content')
  @include('front.components.intro_default', ['page'=>$data['page']])

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

