<section class="menu">
  <div class="container">
      <div class="menu__wrapper">
        @foreach ($global_data['pages'] as $key => $page)
          @if($key == 0)
          <a href="{{route('front.home.index')}}" class="menu__link">{{$page->title}}</a>
          @else
          <a href="{{route('front.other.index', $page->slug)}}" class="menu__link">{{$page->title}}</a>
          @endif
            
        @endforeach
      </div>
  </div>
</section>