<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.css') }}">
    <script src="{{ asset('resources/js/bootstrap.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.js') }}"></script>
    <title>@yield('title', 'Панель администратора')</title>
</head>
<body>
@include('components.header')
<div class="container d-flex justify-content-center gap-2 mt-5">
    <a href="{{route('product')}}" class="btn btn-outline-dark btn-lg w-50 rounded-0" type="submit">Товары</a>
    <a href="{{route('category')}}" class="btn btn-outline-dark btn-lg w-50" type="submit rounded-0">Категории товаров</a>
</div>
@yield('content')
</body>
</html>
