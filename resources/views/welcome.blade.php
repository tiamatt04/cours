<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
    <script src="{{ asset('resources/js/bootstrap.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.js') }}"></script>
    <title>@yield('title', 'Главная страница')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600&display=swap" rel="stylesheet"
</head>
<body>
@include('components.header')
@yield('content')

</body>
</html>
