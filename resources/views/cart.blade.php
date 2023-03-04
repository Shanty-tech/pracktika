

@include('layouts.header')

<div class="new_tovar">
        <p>Каталог нашего сайта</p>
    </div>
    
<div class="container" id="container_prod">
        @foreach($prod as $obprod)
       
        <div class="products" id="product_cart">
            <img class="image_prod" src="{{  $obprod->image  }}" alt="">
            <div class="text_prod">{{  $obprod->name_product  }}</div>
            <div class="price_prod"><p>{{  $obprod->price  }}</p></div>
            <div class="btn_buy_prod"><a href = "korzina{{$obprod->id}}">Добавить в корзину</a></div>
            
        </div>
        @endforeach
</div>

    @include('layouts.footer')
