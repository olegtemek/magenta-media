
@foreach ($products as $product)
      <div class="services__item @if($products->count() > 4) show @endif">
        <input type="hidden" value="{{$product->description}}">
        <img src="/{{$product->image}}" alt="{{$product->title}}">
        <h3>{{$product->title}}</h3>
        @if (!empty($product->material ))
            <p class="material">Материал: {{$product->material}}</p>
        @endif
        <p class="price">
          Цена: 
          @if (!empty($product->price))
              <span>{{number_format($product->price, 0,'', ' ')}} тг.</span>
          @else
            <span>Уточняйте</span>
          @endif

        </p>

        <button class="btn open-product"></button>
      </div>
    @endforeach