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
//aaaaaaaaaaaaa
Route::get('/', function () {
    return view('welcome');
});
Route::get('btngan',function(){
    return ('7bebe');
});
Route::view('btngan1','btngan');
Route::get('btngan2','BtnganController@btngan');
Route::get('btngana/{id}','BtnganController@btngana');

Route::get('apple','ReadyController@index');
Route::get('apple/{id}','ReadyController@show');

Route::get('blade/{id}','BladeController@show');
Route::get('blade','BladeController@view');
