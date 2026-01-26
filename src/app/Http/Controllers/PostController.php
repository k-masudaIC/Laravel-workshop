<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    function show($id)
    {
        return view('post.show', ['id' => $id]);
    }
}
