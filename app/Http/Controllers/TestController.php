<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\user;

class TestController extends Controller
{
//    public function test()
//    {
//        $connect = "DRIVER={SQL Server};Server=demo.bookse.cn,3433;Database=huojidb";
//        $link = odbc_connect("$connect", "gameuser", "Zhaohupk2");
//        $sql = "SELECT * FROM news where id= 4";
//        $rsl = odbc_exec($link, $sql);
//        $data = array();
//        while (odbc_fetch_row($rsl)) {
//            $title = odbc_result($rsl, "title");
//            $content = odbc_result($rsl, "content");
//            $title = iconv('gbk', 'UTF-8', $title);
//            $content = iconv('gbk', 'UTF-8', $content);
//            $item = Array('title' => $title, 'content' => $content);
//            Array_push($data, $item);
//        }
//        print_r($data);
//        $user = User::findOrFail($id);
//        print_r($user);
//    }

    public function show($id)
    {
        $users = User::table('news')->get();
        print_r($users);
//        return view('user.index', ['users' => $users]);
    }

}