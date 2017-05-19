<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Recorder;

class TestController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth', [
//            'only' => ['index','edit', 'update', 'destroy']
//        ]);
//
//        $this->middleware('guest', [
//            'only' => ['index']
//        ]);
//    }
    //查所有。显示所有
    public function index()
    {
        $recorder = Recorder::Paginate(3);
        return view('test.index', compact('recorder'));
//        print_r($result);
    }

    //查单个。显示一个
    public function show($id)
    {

        $recorder = Recorder::find($id);
        return view('test.show', compact('recorder'));
    }

    public function create()
    {
        return view('test.create');
    }

    public function edit($id)
    {
        $recorder = Recorder::findOrFail($id);
        return view('test.edit', compact('recorder'));
    }

    //删除一条
    public function destroy($id)
    {
        $recorder = Recorder::findOrFail($id);
//        $this->authorize('destroy', $user);
        $recorder->delete();
        session()->flash('success', '删除成功！');
        return redirect()->route('test.index');
    }

    public function store(Request $request)//新增数据 store 方法。第一个参数为用户的输入数据，第二个参数为该输入数据的验证规则。
    {
        // 验证请求...
        $this->validate($request, [
            'gameid' => 'required',
            'userid' => 'required',
            'code' => 'required',
            'score' => 'required',
            'msec' => 'required|max:32',
            'gametime' => 'required|max:32',
        ]);

        $recorder = Recorder::create([
            'gameid' => $request->gameid,
            'userid' => $request->userid,
            'code' => $request->code,
            'score' => $request->score,
            'msec' => $request->msec,
            'gametime' =>$request->gametime,
        ]);
        session()->flash('success', '插入成功！');
        return redirect()->route('test.show', [$recorder]);
    }

    //修改数据
    public function update($id, Request $request)
    {
        //验证
        $this->validate($request, [
            'gameid' => 'required',
            'userid' => 'required',
            'code' => 'required',
            'score' => 'required',
            'msec' => 'required|max:32',
            'gametime' => 'required|max:32',
        ]);

        $recorder = Recorder::find($id);
        $recorder->update([
            'gameid' => $request->gameid,
            'userid' => $request->userid,
            'code' => $request->code,
            'score' => $request->score,
            'msec' => $request->msec,
            'gametime' =>$request->gametime,
        ]);
        session()->flash('success', '资料修改成功！');
        return redirect()->route('test.show', [$recorder]);
    }
}