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


//quản lý danh mục sách
Route::get('/listdanhmuc-show', 'DanhMucController@listdanhmuc_show');
Route::get('/themdanhmuc-show', 'DanhMucController@themdanhmuc_show');
////thêm bạn đọc
Route::post('/add-danhmuc', 'DanhMucController@add_danhmuc');
////xoá bạn đọc
Route::get('/del-danhmuc/{iddm}', 'DanhMucController@del_danhmuc');
////sửa bạn đọc
Route::get('/edit-danhmuc/{iddm}', 'DanhMucController@edit_danhmuc');
Route::post('/update-danhmuc/{iddm}', 'DanhMucController@update_danhmuc');


//quản lý sách
Route::get('/listsach-show', 'SachController@listsach_show');
Route::get('/themsach-show', 'SachController@themsach_show');
////thêm bạn đọc
Route::post('/add-sach', 'SachController@add_sach');
////xoá bạn đọc
Route::get('/del-sach/{idsach}', 'SachController@del_sach');
////sửa bạn đọc
Route::get('/edit-sach/{idsach}', 'SachController@edit_sach');
Route::post('/update-sach/{idsach}', 'SachController@update_sach');

