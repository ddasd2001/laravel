<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '')-铜雀游戏管理后台</title>
    <link rel="shortcut icon" href="/laravel/public/favicon.ico">
    <link rel="stylesheet" href="/laravel/public/css/app.css">
    <script type="text/javascript" src="/laravel/public/js/jquery.js"></script>
</head>
<body>
@include('layouts._header')
@include('layouts._left')


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
