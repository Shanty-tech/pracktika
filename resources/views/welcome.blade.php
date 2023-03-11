@include('layouts.header')
    <div class="title">
        <h1>О нас</h1>
        <p>Мы продаем исключительно исклюзивные игры! <br> У нас вы найдете игры по вкусу и цвету, мы на рынке уже более 3-х лет <br>
    Регистрируйся на сайте и получи скидку 25% на все товары!</p>
    </div>

    <div class="new_tovar">
        <p>Ниже представлены новинки нашего сайта!</p>
    </div>
<div class="carusel">
    <div class="itms1" id="prev"><</div>
        <div class="card">
            @foreach($prod as $obprod)
            <div id="imgage_c">
                <img src="{{  $obprod->image  }}" alt="">
                <div class="text">{{  $obprod->name_product  }}</div>
                <div class="price"><p>{{  $obprod->price  }}$</p></div>
                @guest
                <div class="btn_buy"><button><a href="home">Авторизируйтесь</a></button></div>
                @else
                <div class="btn_buy"><button><a href="{{route('kor',$obprod->id)}}">Добавить в корзину</a></button></div>
                @endguest
            </div>
            @endforeach
        </div>
    <div class="items2" id="next">></div>
</div>

@include('layouts.footer')