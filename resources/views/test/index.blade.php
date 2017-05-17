@extends('layouts.default')
@section('title', '战绩表')
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <td rowspan=2>游戏id</td>
            <td rowspan=2>用户id</td>
            <td rowspan=3>局数</td>
            <td rowspan=2>积分</td>
            <td rowspan=2>游戏时间</td>
            <td rowspan=2>特殊局标记</td>
        </tr>
        </thead>
        <tbody>
        @if (count($result) > 0)
            @foreach ($result  as  $a)
                <TR>
                    <TD>{{ $a->id }}</TD>
                    <TD>{{ $a->gameid }}</TD>
                    <TD>{{ $a->userid }}</TD>
                    <TD>{{ $a->code }}</TD>
                    <TD>{{ $a->score }}</TD>
                    <TD>{{ $a->gametime }}</TD>
                    <TD>{{ $a->msec }}</TD>
                </TR>
            @endforeach
        @endif
        </tbody>
    </TABLE>
@stop