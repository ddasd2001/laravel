@include('shared.errors')

<button for="name" ><a href="{{ route('test.index') }}">查询：</a></button>
<input type="text" name="gameid" class="form-control" value="{{ 'gameid' }}">
<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle"
            data-toggle="dropdown">
        ID <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#">用户</a></li>
        <li><a href="#">局号</a></li>
    </ul>
</div>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        插入 <b class="caret"></b>
    </a>
    <ul class="dropdown-menu">
        <form method="POST" action="{{ route('test.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">1：</label>
                <input type="text" name="gameid" class="form-control" value="{{ old('gameid') }}">
            </div>

            <div class="form-group">
                <label for="email">2：</label>
                <input type="text" name="userid" class="form-control" value="{{ old('userid') }}">
            </div>

            <div class="form-group">
                <label for="password">3：</label>
                <input type="text" name="code" class="form-control" value="{{ old('code') }}">
            </div>

            <div class="form-group">
                <label for="password_confirmation">4：</label>
                <input type="text" name="score" class="form-control" value="{{ old('score') }}">
            </div>
            <div class="form-group">
                <label for="password">5：</label>
                <input type="text" name="gametime" class="form-control" value="{{ old('gametime') }}">
            </div>
            <div class="form-group">
                <label for="password">6：</label>
                <input type="text" name="msec" class="form-control" value="{{ old('msec') }}">
            </div>

            <button type="submit" class="btn btn-primary">提交</button>
        </form>
    </ul>
</li>


