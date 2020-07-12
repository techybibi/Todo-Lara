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


//Route::get('about', 'AboutController@index');

/*Route::get('todos','TodoController@index');
Route::get('todos/{todo}','TodoController@show');
Route::get('todos/{todo}','TodoController@create');
Route::post('store-todos','TodoController@store');*/
Route::resource('/todo', 'TodoController');
