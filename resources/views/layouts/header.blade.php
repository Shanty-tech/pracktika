<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>True Gamers</title>
</head>
<body>  
    <header>
        <div class="menu">
            <a href="{{route('welcome')}}">О нас</a>
            <a href="cart">Каталог</a>
            <a href="about">Где нас найти</a>
            @guest
            <a href="register">Регистрация</a>
            <a href="login">Вход</a>
            @else
            <a href="home">Профиль</a>
            @endguest
        </div>
    </header>