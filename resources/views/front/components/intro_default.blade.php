<section class="intro intro__default parallax-default {{$page->slug}}" style="background: url('/{{$page->intro_bg}}') no-repeat center/auto;">
    <span value="-5"><img src="/{{$page->intro_bg_cover}}" alt="{{$page->title}} || Intro"></span>
    <div class="container">
      <div class="intro__wrapper">
        <div class="intro__left">
          <h2>{!! $data['page']->subtitle !!}</h2>
          @if($data['page']->description)
          <p>{{$data['page']->description}}</p>
          @endif

          <button class="btn open-simple">Оставить заявку</button>
        </div>
      </div>
    </div>
  </section>