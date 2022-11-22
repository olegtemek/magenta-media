<footer class="footer">
  <div class="container">
    <div class="footer__menu">
      <nav class="footer__menu-links">
        <ul>
          <li>
            <a href="{{route('front.home.index')}}"><img src="{{Vite::assets('logo.png')}}" alt="{{env('APP_NAME')}}"> {{env('APP_NAME')}}</a>
          </li>
          <li>
            <a href="mailto:{{$global_data['settings']->email}}" target="_blank"> <span></span> {{$global_data['settings']->email}}</a>
          </li>
          <li>
            <a href="#" target="_blank"> <span></span> {{$global_data['settings']->address}}</a>
          </li>
          <li>
            <a href="tel:{{$global_data['settings']->number}}" target="_blank"> 
              <svg class="icon whatsapp">
                <use xlink:href="#whatsapp"></use>
              </svg> 
              {{$global_data['settings']->number}}
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/{{$global_data['settings']->instagram}}" target="_blank">
              <svg class="icon insta_icon">
                <use xlink:href="#instagram"></use>
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="footer__map" id="map">
    <img src="{{Vite::assets('map.png')}}" alt="Map">
  </div>
  <div class="container">
    <span class="nasa">Разработано <a href="https://nasa.kz/" target="_blank">nasa.kz</a></span>
  </div>
</footer>