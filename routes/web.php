<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/first-page', function () {
    return '<h1 style="font-family: Arial;">This is my first page in Laravel</h1>';
});

Route::get('laravel', function () {
    $data = [
        "Laravel Jetstream", "Models Directory", "Model Factory Classes"
    ];
    return view('laravel', compact('data'));
});
