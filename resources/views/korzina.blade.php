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
            <div id="{{ $obprod->tovar_id }}" class = "asd">
                <input id = "count" type="hidden" value = {{ $obprod->tovar_id }}>
                <div class="price"><p>{{  product::find($obprod->tovar_id)->name_product  }}</p></div>
                <div class="price"><p>{{  product::find($obprod->tovar_id)->price  }}$</p></div>
                <form action="{{ route('cartUpadate', $obprod->id) }}" method="post">
                            @csrf
                            <div>
                                <button type="submit" name="quantity" class="btn btn-danger" value="{{ $obprod->quantity - 1 }}">-</button>
                                <span>{{ $obprod->quantity }}</span>
                                <button type="submit" name="quantity" class="btn btn-success"  value="{{ $obprod->quantity + 1 }}">+</button>
                            </div>
                        </form>
                @guest
                <div class="btn_buy"><button><a href="home">Авторизируйтесь</a></button></div>
                @else
                <div class="btn_buy"><button><a href="{{route('del_kor',$obprod->id)}}">Удалить из корзины</a></button></div>
                @endguest
            </div>
            @endforeach

</div>
@include('layouts.footer')