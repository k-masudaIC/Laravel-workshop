<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{id?}', [HelloController::class, 'index']);
