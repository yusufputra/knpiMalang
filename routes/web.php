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
Route::resource('/register','register');

Route::get('/', function () {
    return view('Beranda');
});

Route::get('/hello',function (){
    return view('hello');
})->middleware('auth');


Route::post('register','register@store');


