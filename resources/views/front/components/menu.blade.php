<section class="menu">
  <div class="container">
      <div class="menu__wrapper">
        @foreach ($global_data['pages'] as $page)
            <a href="#" class="menu__link">{{$page->title}}</a>
        @endforeach
      </div>
  </div>
</section>