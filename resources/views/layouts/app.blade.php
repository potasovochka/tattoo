<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Подключение CSS стилей (локальный и бутстрап)-->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
<!--Подключаем шапку сайта-->
@include('inc.header')
<div class="container mt-5">
    <div class="row align-items-center">
        @yield('content')
    </div>
</div>
</body>
</html>
