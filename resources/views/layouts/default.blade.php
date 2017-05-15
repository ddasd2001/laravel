<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '')-铜雀游戏管理后台</title>
    <link href="/laravel/public/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="/laravel/public/css/app.css">
</head>
<body>
@include('layouts._header')

<div class="container">
    <div class="col-md-offset-1 col-md-10">
        @include('shared.messages')
        @yield('content')
        @include('layouts._footer')
    </div>
</div>

<script src="/laravel/public/js/app.js"></script>
</body>
</html>
