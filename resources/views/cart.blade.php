

@include('layouts.header')

<div class="new_tovar">
        <p>Каталог нашего сайта</p>
    </div>
    <div class="min"><a href="{{ route('min_price') }}">Сначала дешёвые</a></div>
    <div class="max"><a href="{{ route('max_price') }}">Сначала дорогие</a></div>
<div class="container" id="container_prod">
    
        @foreach($prod as $obprod)
        <div class="products" id="product_cart">
            <img class="image_prod" src="{{ asset($obprod->image)  }}" alt="">
            <div class="text_prod">{{  $obprod->name_product  }}</div>
            <div class="price_prod"><p>{{  $obprod->price  }}$</p></div>
            @guest
            <div class="btn_buy_prod"><a href = "home">Авторизируйтесь</a></div>
            @else
            <div class="btn_buy_prod"><a href = "korzina{{$obprod->id}}">Добавить в корзину</a></div>
            @endguest
        </div>
        @endforeach
</div>

    @include('layouts.footer')
