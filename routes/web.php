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
    return view('index');
});


Route::get('experiment', function () {
    return view('experiment');
});


Route::get('carousel', function () {
    return view('carousel');
});

Route::get('experimentnav', function () {
    return view('experimentnav');
});


Route::get('materialnav', function () {
    return view('materialnav');
});