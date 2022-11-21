<section class="select">
  <div class="container">
    <h2 class="title">Другие наши проекты</h2>
    <div class="select__wrapper">
      @foreach ($pages as $page)
          <a href="#" class="select__item">
            <div class="select__item-image">
              <img src="/images/{{$page->image}}" alt="{{$page->title}}">
            </div>
            <h3>{{$page->title}}</h3>
          </a>
      @endforeach
    </div>
  </div>
</section>