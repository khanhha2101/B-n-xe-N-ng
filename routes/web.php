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
Route::get('/qlbandoc-show', 'BanDocController@danhSachBanDoc');
Route::get('/qlbandoc-add', 'BanDocController@themBanDoc');
