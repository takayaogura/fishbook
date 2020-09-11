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

//Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/hello', 'HelloController@index');

//Route::get('/books', 'BooksController@index');
//Route::post('/books', 'BooksController@post');

Route::get('/book', 'BookController@index');

Route::get('/book/find', 'BookController@find');
//Route::post('/book/find', 'BookController@search');
Route::post('/book/result', 'BookController@search');

Route::get('/book/add', 'BookController@add');
Route::post('/book/add', 'BookController@create');

Route::get('/book/edit', 'BookController@edit');
Route::post('/book/edit', 'BookController@update');

Route::get('/book/del', 'BookController@delete');
Route::post('/book/del', 'BookController@remove');

Route::get('/user', 'UserController@index');
//Route::post('/user', 'UserController@');
