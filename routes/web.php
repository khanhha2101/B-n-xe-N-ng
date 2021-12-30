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
    return view('testChart');
});

///backend
Route::get('/', 'AdminController@index'); //dangnhap
Route::post('/dashboard','AdminController@dashboard'); //dashboard
Route::get('/dashboard-show','AdminController@dashboard_show'); //dashboard
Route::get('/logout', 'AdminController@logout'); //dang xuat
///thống kê
Route::post('/send-date', 'AdminController@send_date');

//quản lý bạn đọc
Route::get('/listbandoc-show/{diachi}', 'BanDocController@listbandoc_show');
Route::get('/thembandoc-show', 'BanDocController@thembandoc_show');
////thêm 
Route::post('/add-bandoc', 'BanDocController@add_bandoc');
////xoá 
Route::get('/del-bandoc/{idthe}', 'BanDocController@del_bandoc');
////sửa 
Route::get('/edit-bandoc/{idthe}', 'BanDocController@edit_bandoc');
Route::post('/update-bandoc/{idthe}', 'BanDocController@update_bandoc');
////tìm kiếm 
Route::get('/searchbd', 'BanDocController@search');


//quản lý danh mục sách
Route::get('/listdanhmuc-show', 'DanhMucController@listdanhmuc_show');
Route::get('/themdanhmuc-show', 'DanhMucController@themdanhmuc_show');
////thêm 
Route::post('/add-danhmuc', 'DanhMucController@add_danhmuc');
////xoá 
Route::get('/del-danhmuc/{iddm}', 'DanhMucController@del_danhmuc');
////sửa 
Route::get('/edit-danhmuc/{iddm}', 'DanhMucController@edit_danhmuc');
Route::post('/update-danhmuc/{iddm}', 'DanhMucController@update_danhmuc');
////tìm kiếm
Route::get('/searchdm', 'DanhMucController@search');


//quản lý sách
Route::get('/listsach-show', 'SachController@listsach_show');
Route::get('/themsach-show', 'SachController@themsach_show');
////thêm 
Route::post('/add-sach', 'SachController@add_sach');
////xoá 
Route::get('/del-sach/{idsach}', 'SachController@del_sach');
////sửa 
Route::get('/edit-sach/{idsach}', 'SachController@edit_sach');
Route::post('/update-sach/{idsach}', 'SachController@update_sach');
////tìm kiếm 
Route::get('/search', 'SachController@search');
//lọc theo tên danh mục
Route::get('/loc-sach/{iddm}', 'SachController@loc_sach');


//quản lý mượn trả sách
Route::get('/muonsach-show', 'QuanLyMuonController@muonsach_show');
Route::get('/trasach-show', 'QuanLyMuonController@trasach_show');
//thêm
Route::post('/add-chitiet', 'QuanLyMuonController@add_chitiet');
//sửa
Route::get('/edit-chitiet/{idthe}&{ngaymuon}&{idct}', 'QuanLyMuonController@edit_chitiet');
Route::post('/update-chitiet/{idthe}&{ngaymuon}', 'QuanLyMuonController@update_chitiet');
//xoá
Route::get('/del-chitiet/{idthe}&{ngaymuon}&{idct}', 'QuanLyMuonController@del_chitiet');
//lọc theo trạng thái
Route::get('/search-mathe/{trangthai}', 'QuanLyMuonController@search_mathe');
//tìm kiếm theo mã thẻ
Route::get('/search-mathe2/{idthe}', 'QuanLyMuonController@search_mathe2');


//thống kê
Route::get('/thongke-sach/{date1}&{date2}', 'ThongKeController@thongke_sach');
Route::post('/sach-thongke', 'ThongKeController@sach_thongke');
Route::get('/thongke-bandoc/{date1}&{date2}', 'ThongKeController@thongke_bandoc');
Route::post('/bandoc-thongke', 'ThongKeController@bandoc_thongke');
