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


/*
|--------------------------------------------------------------------------
| KHÁCH HÀNG
|--------------------------------------------------------------------------
*/
Route::get('/', 'TrangChuController@home'); 
Route::post('/kiemtralogin', 'TrangChuController@kiemtralogin'); 
Route::get('/login', 'TrangChuController@login'); 
Route::get('/createaccount', 'TrangChuController@createaccount'); 
Route::get('/canhan', 'KhachHangController@canhan'); 
Route::get('/dangxuat', 'TrangChuController@dangxuat'); 
Route::get('/trangthongbao', 'TrangChuController@trangthongbao'); 
Route::get('/trangtimkiem', 'TrangChuController@trangtimkiem'); 
/*
|----------------------------KHÁCH HÀNG-----------------------------------
*/

/*
|--------------------------------------------------------------------------
| QUẢN LÝ
|--------------------------------------------------------------------------
*/
Route::get('/trangchinh', 'QuanLyController@trangchinh');
Route::get('/trangquanly', 'QuanLyController@trangquanly'); 


//trang cá nhân
Route::get('/trangcanhan', 'QuanLyController@trangcanhan'); 
Route::post('/sua-thongtin', 'QuanLyController@sua_thongtin'); 
 

 // quản lý tuyến
Route::get('/dstuyen', 'QuanLyController@dstuyen');

Route::get('/view-themtuyen', 'QuanLyController@view_themtuyen'); 
Route::post('/them-tuyen', 'QuanLyController@them_tuyen'); 

Route::get('/view-suatuyen/{mat}', 'QuanLyController@view_suatuyen'); 
Route::post('/sua-tuyen', 'QuanLyController@sua_tuyen'); 

Route::get('/xoa-tuyen/{mat}', 'QuanLyController@xoa_tuyen'); 

 // hãng xe
Route::get('/dshangxe', 'QuanLyController@dshangxe');
Route::get('/dsdkhangxe', 'QuanLyController@dsdkhangxe');

Route::get('/duyet-hangxe/{mand}', 'QuanLyController@duyet_hangxe');
Route::get('/xoa-hangxe/{mand}', 'QuanLyController@xoa_hangxe');

 //chuyến xe
Route::get('/chuyenxe/{mand}', 'QuanLyController@chuyenxe');

Route::get('/xoa-chuyenxe/{macx}&{mand}', 'QuanLyController@xoa_chuyenxe');

Route::get('/duyet-chuyenxe/{macx}&{mand}', 'QuanLyController@duyet_chuyenxe');

Route::get('/xem-chuyenxe/{macx}&{mand}', 'QuanLyController@xem_chuyenxe');

/*
|----------------------------QUẢN LÝ-----------------------------------
*/

/*
|--------------------------------------------------------------------------
| NHÂN VIÊN
|--------------------------------------------------------------------------
*/
Route::get('/dangthongbao', 'QuanLyController@dangthongbao'); 
Route::get('/dsthongbao', 'QuanLyController@dsthongbao'); 
Route::get('/dshotro', 'QuanLyController@dshotro');
Route::get('/chitiethotro', 'QuanLyController@chitiethotro');
/*
|----------------------------NHÂN VIÊN-----------------------------------
*/

