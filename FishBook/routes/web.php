<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

//  /にアクセスがあった場合、/bookにリダイレクトする。また、middleware('auth')でログインチェック→/loginへのリダイレクト
Route::get('/', function(){
    return redirect('/book');
})->middleware('auth');


Route::get('/book', 'BookController@index');

Route::get('/book/find', 'BookController@find');
Route::post('/book/result', 'BookController@search');

Route::get('/book/add', 'BookController@add');
Route::post('/book/add', 'BookController@create');

Route::get('/book/edit', 'BookController@edit');
Route::post('/book/edit', 'BookController@update');

Route::get('/book/del', 'BookController@delete');
Route::post('/book/del', 'BookController@remove');

Route::get('/book/detail', 'BookController@detail');
//Route::post('/book/del', 'BookController@remove');

Route::get('/user', 'UserController@index');
Route::get('/user/add', 'ProfileController@add');
Route::post('/user/add', 'ProfileController@create');