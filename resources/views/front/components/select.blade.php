<section class="select">
  <div class="container">
    <h2 class="title">Другие наши проекты</h2>
    <div class="select__wrapper">
      @foreach ($pages as $key => $page)
          @if($key == 0)
          <a href="{{route('front.home.index')}}" class="select__item">
            <div class="select__item-image">
              <img src="/images/{{$page->image}}" alt="{{$page->title}}">
            </div>
            <h3>{{$page->title}}</h3>
          </a>
          @else
          <a href="{{route('front.other.index', $page->slug)}}" class="select__item">
            <div class="select__item-image">
              <img src="/images/{{$page->image}}" alt="{{$page->title}}">
            </div>
            <h3>{{$page->title}}</h3>
          </a>
          @endif
      @endforeach
    </div>
  </div>
</section>