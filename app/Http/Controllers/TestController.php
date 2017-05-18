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
    //显示
    public function index()
    {
        $recorder = Recorder::Paginate(3);
        return view('test.index', compact('recorder'));
//        print_r($result);
    }

    public function show($id)
    {
        $recorder = Recorder::findOrFail($id);
        return view('test.show', compact('recorder'));
    }

    //删除一条
    public function destroy($id)
    {
        $recorder = Recorder::findOrFail($id);
//        $this->authorize('destroy', $user);
        $recorder->delete();
        session()->flash('success', '删除成功！');
        return back();
    }

    public function store(Request $request)//处理表单数据提交后的 store 方法。第一个参数为用户的输入数据，第二个参数为该输入数据的验证规则。
    {
        // 验证请求...
        $this->validate($request, [
            'gameid' => 'required|max:3|integer',
            'userid' => 'required|max:6|integer',
            'code' => 'required|integer|integer',
            'score' => 'required|integer',
            'msec' => 'required|max:32',
        ]);

        $recorder = Recorder::create([
            'gameid' => $request->gameid,
            'userid' => $request->userid,
            'code' => $request->code,
            'score' => $request->score,
            'msec' => $request->msec,
        ]);
        session()->flash('success', '插入成功！');
        return redirect()->route('test.show', [$recorder]);
    }
}