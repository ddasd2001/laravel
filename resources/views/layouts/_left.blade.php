@if (Auth::check())
    <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
            <li class="active"><a href="{{ route('home') }}"></i>主页</a></li>
            <ul class="templatemo-submenu">
                <li><a href="{{ route('test.index') }}">战绩表</a></li>
                <li><a href="#">表</a></li>
                <li><a href="#">表</a></li>
                <li><a href="#">表</a></li>
                <li><a href="#">表</a></li>
            </ul>
            </li>
        </ul>
    </div>
@endif

