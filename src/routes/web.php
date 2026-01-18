<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);

// Route::get('hello/{msg?}', function ($msg) {
//     $html = <<<E0F
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//     body  { font-size:16pt; color:#999; }
//     h1   { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
//     </style>
//     </head>
//     <body>
//     <h1>Hello</h1>
//     <p>{$msg}</p>
//     <p>これは、サンプルページです。</p>
//     </body>
//     </html>
//     E0F;
//     return $html;
// });

