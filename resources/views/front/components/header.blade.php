<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <div class="header__logo">
        <a href="{{route('front.home.index')}}"><img src="{{Vite::assets('logo.png')}}" alt="{{env('APP_NAME')}}"> {{env('APP_NAME')}}</a>
        <svg class="icon" id="burger_btn">
          <use xlink:href="#burger"></use>
        </svg>
      </div>
      <div class="header__right">
        <span class="cross">&#9587;</span>
        <nav>
          <ul>
            <li>
              <a href="mailto:{{$global_data['settings']->email}}" target="_blank"> <span></span> {{$global_data['settings']->email}}</a>
            </li>
            <li>
              <a href="#" target="_blank"> <span></span> {{$global_data['settings']->address}}</a>
            </li>
            <li>
              <a href="tel:{{$global_data['settings']->number}}" target="_blank"> 
                <svg class="icon">
                  <use xlink:href="#whatsapp"></use>
                </svg> 
                {{$global_data['settings']->number}}
              </a>
            </li>

            @foreach ($global_data['pages']->reverse() as $page)
              <li class="link_menu">
                <a href="#">{{$page->title}}</a>
              </li>
            @endforeach
          </ul>
        </nav>

        <a href="https://www.instagram.com/{{$global_data['settings']->instagram}}" target="_blank">
          <svg class="icon">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</header>