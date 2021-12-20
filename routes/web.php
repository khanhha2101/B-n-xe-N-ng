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

///backend
Route::get('/admin', 'AdminController@index'); //dangnhap
Route::post('/dashboard','AdminController@dashboard'); //dashboard
Route::get('/dashboard-show','AdminController@dashboard_show'); //dashboard
Route::get('/logout', 'AdminController@logout'); //dang 

//quản lý bạn đọc
Route::get('/listbandoc-show', 'BanDocController@listbandoc_show');
Route::get('/thembandoc-show', 'BanDocController@thembandoc_show');
////thêm bạn đọc
Route::post('/add-bandoc', 'BanDocController@add_bandoc');
////xoá bạn đọc
Route::get('/del-bandoc/{idthe}', 'BanDocController@del_bandoc');
////sửa bạn đọc
Route::get('/edit-bandoc/{idthe}', 'BanDocController@edit_bandoc');
Route::post('/update-bandoc/{idthe}', 'BanDocController@update_bandoc');

