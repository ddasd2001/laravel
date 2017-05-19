@extends('layouts.default')
@section('title', '战绩表')
@section('content')
    <div>
        @include('test.create')
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
                @if (count($recorder) > 0)
                    @foreach ($recorder  as  $a)
                        <TR>
                            <TD>{{ $a->gameid }}</TD>
                            <TD>{{ $a->userid }}</TD>
                            <TD>{{ $a->code }}</TD>
                            <TD>{{ $a->score }}</TD>
                            <TD>{{ $a->gametime }}</TD>
                            <TD>{{ $a->msec }}</TD>
                            <TD>
                                <button href="{{ route('test.edit', $a->id) }}">编辑</button>

                                <form action="{{ route('test.destroy', $a->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
                                </form>
                            </TD>
                        </TR>
                    @endforeach
                @else
                    <p>没有查询到相关数据</p>
                @endif
                </tbody>
                <tfoot>
                <tr>
                    <td >{!! $recorder->render() !!}</td>
                </tr>
                </tfoot>
            </TABLE>
        </div>
    </div>
@stop