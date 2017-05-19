@extends('layouts.default')
@section('title', '编辑数据')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>更新战绩</h5>
            </div>
            <div class="panel-body">
                @include('shared.errors')
                <form method="POST" action="{{ route('test.update', $recorder->id )}}">
                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">游戏：</label>
                        <input type="text" name="gameid" class="form-control" value="{{ $recorder->gameid }}">
                    </div>
                    <div class="form-group">
                        <label for="email">用户：</label>
                        <input type="text" name="userid" class="form-control" value="{{ $recorder->userid }}">
                    </div>
                    <div class="form-group">
                        <label for="password">局号：</label>
                        <input type="text" name="code" class="form-control" value="{{ $recorder->code }}">
                    </div>
                    <div class="form-group">
                        <label for="password">积分：</label>
                        <input type="text" name="score" class="form-control" value="{{ $recorder->score }}">
                    </div>
                    <div class="form-group">
                        <label for="password">时间：</label>
                        <input type="text" name="gametime" class="form-control" value="{{ $recorder->gametime }}">
                    </div>
                    <div class="form-group">
                        <label for="password">特殊标记：</label>
                        <input type="text" name="msec" class="form-control" value="{{ $recorder->msec }}">
                    </div>
                    <button type="submit" class="btn btn-primary">插入</button>
                </form>
            </div>
        </div>
    </div>
@stop