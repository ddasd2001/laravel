@extends('layouts.default')
@section('title', '战绩表')
@section('content')
    @include('shared.errors')
    <div class="form-group">
        <h3 align="center">战 绩 表</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>游戏id</th>
                <th>用户id</th>
                <th>局数</th>
                <th>积分</th>
                <th>游戏时间</th>
                <th>特殊局标记</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

                    <TR>
                        <TD>{{ $recorder->gameid }}</TD>
                        <TD>{{ $recorder->userid }}</TD>
                        <TD>{{ $recorder->code }}</TD>
                        <TD>{{ $recorder->score }}</TD>
                        <TD>{{ $recorder->gametime }}</TD>
                        <TD>{{ $recorder->msec }}</TD>
                        <TD>
                            <form action="{{ route('test.destroy', $recorder->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
                            </form>
                        </TD>
                    </TR>


            </tbody>
            <tfoot>

            </tfoot>
            @include('test._creat')
        </TABLE>
    </div>
@stop