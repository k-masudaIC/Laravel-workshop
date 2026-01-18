<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){

    return <<<E0F
    <html>
    <head>
    <title>Hello</title>
    <style>
    body  { font-size:16pt; color:#999; }
    h1   { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
    </style>
    </head>
    <body>
    <h1>Hello</h1>
    <p>This is HelloController index method.</p>
    <p>これは、サンプルページです。</p>
    </body>
    </html>
    E0F;
    }
}
