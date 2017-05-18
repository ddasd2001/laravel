@extends('layouts.default')
@section('title', '战绩表')
@section('content')
    <div class="form-group">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>游戏id</th>
            <th>用户id</th>
            <th>局数</th>
            <th>积分</th>
            <th>游戏时间</th>
            <th>特殊局标记</th>
        </tr>
        </thead>
        <tbody>
        @if (count($result) > 0)
            @foreach ($result  as  $a)
                <TR>
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
        <tfoot>
        <tr>
            <td >111</td>
        </tr>
        </tfoot>
    </TABLE>
    </div>
    {{ $result->links() }}
@stop