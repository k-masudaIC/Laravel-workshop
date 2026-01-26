<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\HelloRequest;


class HelloController extends Controller
{
    use ValidatesRequests;
    public function index(Request $request)
    {
        return view('hello.index', ['msg' => 'フォームを入力:']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg' => '正しく入力されました。']);
    }
}

