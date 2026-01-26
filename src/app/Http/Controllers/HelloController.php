<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    public function index(Request $request)
    {
        if(isset($request->id))
        {
            $param = ['id' => $request->id];
            $item = DB::select('select * from people where id = :id', $param);
        }else{
            $item = DB::select('select * from people');
        }
        return view('hello.index', ['items' => $item]);
    }
}


