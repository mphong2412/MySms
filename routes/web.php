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
Route::get('services',['as'=>'service','uses'=>'ServiceController@getList']);


  Route::group(['prefix'=>'templates'],function(){

        // xóa templates
      Route::get('xoa/{id}','TemplateController@getXoa');

        // sửa template
      Route::get('sua/{id}','TemplateController@getSua');
      Route::post('sua/{id}','TemplateController@postSua');

        //thêm template
      Route::get('them','TemplateController@getThem');
      Route::post('them','TemplateController@postThem');
  });

  Route::group(['prefix'=>'services'],function(){

        // xóa template
      Route::get('xoa/{id}','ServiceController@destroy');
      //   // sửa template
      // Route::get('edittemp/{id}','ServiceController@getSua');
      // Route::post('edittemp/{id}','ServiceController@postSua');
      //   //thêm template
      // Route::get('addtemp','ServiceController@getThem');
      // Route::post('addtemp','ServiceController@postThem');
  });
