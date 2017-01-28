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

Route::get('/inicio', function () {
    return view('home');
});
Route::get('/sobre-nosotros', function () {
    return view('about');
});
Route::get('/articulos', function () {
    return view('articles');
});
Route::get('/contacto', function () {
    return view('contact');
});

Auth::routes();

Route::resource('posts', 'PostController');
