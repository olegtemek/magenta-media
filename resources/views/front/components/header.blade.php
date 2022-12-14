<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <div class="header__logo">
        <a href="{{route('front.home.index')}}"><img src="{{Vite::asset('resources/assets/logo.png')}}" alt="{{env('APP_NAME')}}"> {{env('APP_NAME')}}</a>
        <a class="header_number" href="tel:{{$global_data['settings']->number}}">{{$global_data['settings']->number}}</a>
        <svg class="icon" id="burger_btn">
          <use xlink:href="#burger"></use>
        </svg>
      </div>
      <div class="header__right">
        <span class="cross">&#9587;</span>
        <nav>
          <ul>
            <li>
              <a href="mailto:{{$global_data['settings']->email}}" target="_blank"> <span></span> Напишите нам на почту</a>
            </li>
            <li>
              <a href="https://go.2gis.com/if77e" target="_blank"> <span></span> {{$global_data['settings']->address}}</a>
            </li>
            <li>
              <a href="https://wa.me/{{$global_data['settings']->number_whatsapp}}?text=Здравствуйте" target="_blank"> 
                <svg class="icon">
                  <use xlink:href="#whatsapp"></use>
                </svg> 
              </a>
              <a class="number" href="tel:{{str_replace(' ', '',$global_data['settings']->number)}}"> 
                {{$global_data['settings']->number}}
              </a>
            </li>

            @foreach ($global_data['pages']->reverse() as $key=> $page)
              <li class="link_menu">
                @if($key == 0)
                <a href="{{route('front.home.index')}}" >{{$page->title}}</a>
                @else
                <a href="{{route('front.other.index', $page->slug)}}" >{{$page->title}}</a>
                @endif
              </li>
            @endforeach
            <li class="link_menu">
              <a href="{{route('front.photo.index', 1)}}">Все наши работы</a>
            </li>
            <li class="link_menu contacts">
              <button class="company">Контакты</button>
            </li>
          </ul>
        </nav>

        <a href="https://www.instagram.com/{{$global_data['settings']->instagram}}" target="_blank">
          <svg class="icon">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>
      </div>
    </div>

    <div class="burger_pc">
      <span class="cross">&#9587;</span>
      @foreach ($global_data['pages'] as $key=> $page)
          @if ($key == 0)
          <li><a href="/">{{$page->title}}</a></li>
          @else
          <li><a href="{{route('front.other.index', $page->slug)}}">{{$page->title}}</a></li>
          @endif
      @endforeach
      <li>
        <button class="contacts">Контакты</button>
      </li>
      <li>
        <a href="{{route('front.photo.index', 1)}}">Все наши работы</a>
      </li>
      <a href="https://www.instagram.com/{{$global_data['settings']->instagram}}" target="_blank">
        <svg class="icon">
          <use xlink:href="#instagram"></use>
        </svg>
      </a>
      <li class="mail">
        <a href="mailto:{{$global_data['settings']->email}}" target="_blank"> <span></span> {{$global_data['settings']->email}}</a>
      </li>
      <li>
        <a href="https://go.2gis.com/if77e" target="_blank"> <span></span> {{$global_data['settings']->address}}</a>
      </li>
      <li class="whatsapp">
        <a href="https://wa.me/{{$global_data['settings']->number_whatsapp}}?text=Здравствуйте" target="_blank"> 
          <svg class="icon">
            <use xlink:href="#whatsapp"></use>
          </svg> 
        </a>
        <a class="number" href="tel:{{str_replace(' ', '',$global_data['settings']->number)}}"> 
          {{$global_data['settings']->number}}
        </a>
      </li>
    </div>
  </div>
</header>