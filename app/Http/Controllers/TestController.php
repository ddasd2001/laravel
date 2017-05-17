<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Recorder;

class TestController extends Controller
{

    public function index()
    {
        $result = Recorder::all();
//        echo json_encode($result);
        return view('Test.index', ['result' => $result]);
    }

}