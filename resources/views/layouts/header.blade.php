<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>True Gamers</title>
</head>
<body>  
    <header>
        <div class="menu">
            <a href="{{route('welcome')}}">О нас</a>
            <a href="{{asset('cart')}}">Каталог</a>
            <a href="{{asset('about')}}">Где нас найти</a>
            @guest
            <a href="{{asset('register')}}">Регистрация</a>
            <a href="{{asset('login')}}">Вход</a>
            @else
            <a href="{{asset('home')}}">Профиль</a>
            <a href="{{asset('korzina')}}">Корзина</a>
            @endguest
        </div>
    </header>