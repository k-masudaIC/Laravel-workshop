<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index()
    {
        $data=[
            ['name' => '山田太郎', 'mail' => 'taro@yamada'],
            ['name' => '鈴木次郎', 'mail' => 'jiro@suzuki'],
            ['name' => '佐藤三郎', 'mail' => 'saburo@sato']
        ];
        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg' => $request->input('msg')]);
    }

}
