<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\HelloMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', [HelloController::class, 'index']);
Route::post('hello', [HelloController::class, 'post']);

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);
Route::get('hello/edit/{id}', [HelloController::class, 'edit']);
Route::post('hello/edit/{id}', [HelloController::class, 'update']);
Route::get('hello/del/{id}', [HelloController::class, 'del']);
Route::post('hello/del/{id}', [HelloController::class, 'remove']);
Route::get('hello/show/{id}', [HelloController::class, 'show']);
Route::get('person', [PersonController::class, 'index']);
Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);
