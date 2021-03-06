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

Route::get('menu', function () {
    return view('layouts.menu');
});

Route::get('contact', function () {
    return view('layouts.contact');
});

Auth::routes();

Route::get('perfil', function () {
    return view('layouts.perfil');
});

Auth::routes();

Route::get('inicio', function () {
    return view('inicio');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
