<section class="insta">
  <div class="container">
    <div class="insta__wrapper">
      <span> <svg class="icon insta_icon">
        <use xlink:href="#instagram"></use>
      </svg></span>
      <h2 class="title">Мы в instagram</h2>

      <div class="insta__photos">
        @foreach (array(1,2,3,4,5,6) as $item)
            <a href="#" target="_blank"></a>
        @endforeach
      </div>
      <p>Подписывайтесь, чтобы быть в курсе всех событий</p>
      <a class="btn" href="https://instagram.com/{{$global_data['settings']->instagram}}" target="_blank">Подписаться</a>
    </div>
  </div>
</section>