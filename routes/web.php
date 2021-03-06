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

Route::get('/', 'WebController@home');
Route::get('/home', 'WebController@home')->name('home');
Route::get('/blog', 'WebController@blog')->name('blog');
Route::get('/blog/{uri}', 'WebController@article')->name('article');
Route::get('/contato', 'WebController@contact')->name('contact');
Route::get('/login', 'WebController@login')->name('login');



