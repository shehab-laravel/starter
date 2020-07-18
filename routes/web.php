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
Route::get('/franchace', function () {
    return view('franchace');
});
Route::get('/first', function () {
    return view('first');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('index','Front\AboutController@getIndex' ); //الصح اننا نستدعي الكنبرولر  وليس الفيو هنا
