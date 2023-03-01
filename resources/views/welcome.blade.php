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
            </div>
            @endforeach
            <!-- <div id="imgage_c">
                <img src="../resources/img/cd79fb5a-77da-4bd8-a41f-55bd5c8dcca8.jpg" alt="">
            </div>
            <div id="imgage_c">
                <img src="../resources/img/df8fbc9126d8c6d4_1920xH.jpg" alt="">
            </div>
            <div id="imgage_c">
                <img src="../resources/img/6068989288.jpg" alt="">
            </div>
            <div id="imgage_c">
                <img src="../resources/img/vneshnii-zhestkii-disk-seagate-sthb2000401-0-small.jpg" alt="">
            </div> -->
        </div>
    <div class="items2" id="next">></div>
    
</div>

@include('layouts.footer')