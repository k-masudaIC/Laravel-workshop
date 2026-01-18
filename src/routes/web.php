<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//http://localhost:8000/helloで確認。
//ルート作成はここでできることを覚えておく。
Route::get('hello', function () {
    return '<html><body><h1>Hello, World!</h1><p>This is a sample page.</p></body></html>';
});
