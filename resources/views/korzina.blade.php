@php
use App\Models\korzina;
use App\Models\product;
@endphp
@include('layouts.header')
    

    <div class="new_tovar">
        <p>Ваши товары</p>
    </div>

        <div class="card">
            @foreach($lox as $obprod)
            <div id="ASD">
                <div class="price"><p>{{  product::find($obprod->tovar_id)->name_product  }}</p></div>
                @guest
                <div class="btn_buy"><button><a href="home">Авторизируйтесь</a></button></div>
                @else
                <div class="btn_buy"><button><a href="{{route('del_kor',$obprod->id)}}">Удалить из корзины</a></button></div>
                @endguest
            </div>
            @endforeach

</div>

@include('layouts.footer')