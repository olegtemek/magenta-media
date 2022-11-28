@extends('front.layouts.empty')


@section('seo_title', $data['page']->seo_title)

@section('seo_description', $data['page']->seo_description)




@section('content')
  

  <input type="hidden" id="page_id" value="{{$data['page']->id}}">


  <section class="photo">
    <div class="container">
      <h2 class="title">Все наши работы - {{$data['page']->title}}</h2>
      <div class="photo__menu">
        @foreach ($data['pages'] as $key=> $page)
            <a href="{{route('front.photo.index', $page->id)}}" class="
              @if($data['page']->id == $page->id)
              active
              @endif
              ">{{$page->title}}</a>
        @endforeach
      </div>
      <div class="photo__wrapper">
        @foreach ($data['photos'] as $photo)
        <div data-fancybox data-src="/{{$photo->image}}" class="photo__item" data-caption="{{$photo->title}}">
          <img src="/{{$photo->image}}" alt="{{$photo->title}}">
        </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

