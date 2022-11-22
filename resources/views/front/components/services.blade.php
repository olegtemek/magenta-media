
<div class="container">
  <h2 class="title">Наши услуги</h2>
  <div class="services__wrapper">
    @foreach ($products as $product)
      <div class="services__item">
        <img src="/{{$product->image}}" alt="{{$product->title}}">
        <h3>{{$product->title}}</h3>
        @if (!empty($product->material ))
            <p>Материал: {{$product->material}}</p>
        @endif
        <p>
          Цена: 
          @if (!empty($product->price))
              <span>{{number_format($product->price, 0,'', ' ')}} тг.</span>
          @else
            <span>Уточняйте</span>
          @endif

        </p>

        <button class="btn"></button>
      </div>
    @endforeach
  </div>
  <button id="products_more">
    @if (empty($btn))
      Смотреть еще  
    @else
      Скрыть
    @endif
  </button>
</div>