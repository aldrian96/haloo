<?php

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

Route::get('/belajar', function () {
    echo "<u>Haloooo<u>";
});

Route::get('/belajar2', function () {
    echo "<i>panjul ganteng<i>";
});

Route::get('/belajar3', function () {
    echo "<h1>piki ganteng<h1>";
});

Route::get('/about', function () {
    return view('about');
});
