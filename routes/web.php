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



Route::get('index',['as'=>'trang-chu','uses'=>'PageController@getIndex']);
Route::get('templates',['as'=>'template','uses'=>'PageController@getTemplates']);
Route::get('compose',['as'=>'compose','uses'=>'PageController@getCompose']);

Route::get('login','UserController@getLoginAdmin');
Route::post('login','UserController@postLoginAdmin');

Route::get('register','UserController@getRegisterAdmin');
Route::post('register','UserController@postRegisterAdmin');
