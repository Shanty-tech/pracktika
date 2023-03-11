@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if(isset($prod))
            @if(Auth::user()->name == "admin")
                <div class="card-header">{{ __('ADmin POROL') }}</div>

                
                    @foreach($prod as $da)
                        <div class="name_tov">{{ $da -> name_product }}</div>
                        <div class="price">{{ $da -> price }}</div>
                        <div class="delete_tov_bd"><a href="{{ route('delete_tov_bd',$da -> id ) }}">DELETE</a></div>
                    @endforeach
               
    <br><br><br><br>
                <form action="{{ route('add_tov') }}" method="GET" >
                    <input type="text" name="name_product" placeholder="name_product">
                    <input type="text" name="price" placeholder="price">
                    <input type="text" name="image" placeholder="image url">
                    <button type="submit">Добавить</button>
                </form>
                @else
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            @endif
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
