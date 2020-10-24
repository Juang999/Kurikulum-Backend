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

Route::get('/home', 'IndexController@index');

Route::get('/about', 'IndexController@about');

Route::get('/article', 'ArticleController@index');

Route::get('/create', 'ArticleController@create');

Route::post('/store', 'ArticleController@store');

Route::get('/detail/{article}', 'ArticleController@show');

Route::delete('/delete/{article}', 'ArticleController@destroy');

Route::get('/article/{article}/edit', 'ArticleController@edit');

Route::patch('/update/{article}', 'ArticleController@update');

Route::get('/search', 'ArticleController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
