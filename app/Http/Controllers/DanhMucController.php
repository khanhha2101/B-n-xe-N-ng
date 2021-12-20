<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhMucController extends Controller
{
    //
    //form thêm danh mục
    public function themdanhmuc_show() {
    	return view('admin.danhmuc.themdanhmuc');
    }

    //hiển thị list 
    public function listdanhmuc_show() {

        $all_danhmuc = DB::table('danhmuc')-> get();
        $manager_danhmuc = view('admin.danhmuc.quanlydanhmuc') -> with('all_danhmuc',$all_danhmuc);
        return view('admin_layout') -> with('admin.danhmuc.quanlydanhmuc',$manager_danhmuc);
    }

    //thêm bạn đọc
    public function add_danhmuc(Request $request) {
    	$data = array();
    	$data['tendm'] = $request->them_tendm;

    	$result = DB::table('danhmuc')->insert($data);

        if($result) {

            return Redirect::to('/listdanhmuc-show');
        } else {

            return Redirect::to('/themdanhmuc-show');
        }   	
    }

    //xoá bạn đọc
    public function del_danhmuc($iddm) {
        DB::table('danhmuc')-> where('iddm',$iddm)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('listdanhmuc-show');
    }

    //sửa bạn đọc
    public function edit_danhmuc($iddm) {

        $edit_danhmuc = DB::table('danhmuc')-> where('iddm', $iddm) -> get();
        $manager_danhmuc = view('admin.danhmuc.edit_danhmuc') -> with('edit_danhmuc',$edit_danhmuc);
        return view('admin_layout') -> with('admin.danhmuc.edit_danhmuc',$manager_danhmuc);
    }
    public function update_danhmuc(Request $request,$iddm) {
        $data = array();
        $data['tendm'] = $request->sua_tendm;

        DB::table('danhmuc')-> where('iddm',$iddm)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('listdanhmuc-show');
    }
}
