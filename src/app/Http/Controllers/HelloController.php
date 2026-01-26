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
        $items = DB::select('SELECT * FROM people');
        return view('hello.index', ['items' => $items]);
    }
}

