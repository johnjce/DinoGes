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
 * 
Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback);
 * 
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tiendas', "TiendaController@getTiendas");

Route::get('/macrolans', function () {
    return view('macrolans');
});

Route::get('/ofal', function () {
    return view('ofal');
});

Route::get('/wiki', function () {
    return view('wiki');
});

Route::get('/plantilla', function () {
    return view('plantilla');
});

Route::get('/migraciones', function () {
    return view('migraciones');
});
