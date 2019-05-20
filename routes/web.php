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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',['as'=>'trang-chu','uses'=>'PageController@getIndex']);
Route::get('templates',['as'=>'templates','uses'=>'PageController@getTemplates']);
Route::get('addtemp',['as'=>'addtemp','uses'=>'PageController@getAddTemp']);
Route::post('addtemp',['as'=>'addtemp','uses'=>'PageController@postAddTemp']);
Route::get('edittemp',['as'=>'edittemp','uses'=>'PageController@getEdit']);


Route::group(['prefix'=>'templates'],function(){
  // xóa template
Route::get('xoa/{id}','PageController@getXoa');
  // sửa template
Route::get('edittemp/{id}','PageController@getSua');
Route::post('edittemp/{id}','PageController@postSua');
  //thêm template
// Route::get('addtemp','PageController@getThem');
// Route::post('addtemp','PageController@postThem');
});
