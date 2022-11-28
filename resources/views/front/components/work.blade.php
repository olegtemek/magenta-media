<section class="work">
  <div class="container">
    <h2 class="title">Примеры наших работ</h2>
    <div class="swiper work__slider">
      <div class="swiper-button-prev work__slider-button-prev"></div>
      <div class="swiper-button-next work__slider-button-next"></div>
      <div class="swiper-wrapper">
        @foreach ($galleries as $gallery)
        <div data-fancybox data-src="/{{$gallery->image}}" class="swiper-slide" data-caption="{{$gallery->title}}">
          <img src="/{{$gallery->image}}" alt="{{$gallery->title}}">
        </div>
        @endforeach
      </div>
      
      <div class="swiper-pagination work-pagination"></div>
  
    </div>
    <a class="btn" href="{{route('front.photo.index', $data['page']->id)}}">Смотреть все работы</a>
  </div>
</section>