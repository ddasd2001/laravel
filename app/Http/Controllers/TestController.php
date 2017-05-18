<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Recorder;

class TestController extends Controller
{

    public function index()
    {
        $result = Recorder::where('gameid', 118)->orderBy('id', 'desc')->Paginate(3);
        return view('Test.index', compact('result'));
//        print_r($result);
    }

}