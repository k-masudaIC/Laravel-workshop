<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id ?? 'zero';
        $data = ['msg' => 'Hello, World!', 'id' => $id];
        return view('hello.index', $data);
    }

}
