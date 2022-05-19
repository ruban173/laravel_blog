<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   @include('include.css')
    <title>    @yield('title')</title>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Тредиум</a>

        <ul class="nav nav-pills   justify-content-end">
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('main')?'active':null}}" aria-current="page" href="{{route("main")}}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{request()->routeIs('articles*')?'active':null}}" href="{{route("articles")}}">Категории</a>
            </li>

        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>

@include('include.js')

</body>
</html>
