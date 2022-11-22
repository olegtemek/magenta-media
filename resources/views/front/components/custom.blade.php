<section class="custom">
  <div class="container">
    <div class="custom__wrapper">
      <div class="custom__left">
        <h4 class="title">{{$page->custom_title}}</h4>
        <p>{{$page->custom_description}}</p>
        <button class="btn">Заказать</button>
      </div>
      <div class="custom__right">
        <img src="{{$page->custom_image}}" alt="{{$page->custom_title}}">
      </div>
    </div>
  </div>
</section>