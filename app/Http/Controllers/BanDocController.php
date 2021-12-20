<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BanDocController extends Controller
{
    //form thêm bạn đọc
    public function thembandoc_show() {
    	return view('admin.bandoc.thembandoc');
    }

    //hiển thị list bạn đọc
    public function listbandoc_show() {

        $all_bandoc = DB::table('themuon')-> get();
        $manager_bandoc = view('admin.bandoc.quanlybandoc') -> with('all_bandoc',$all_bandoc);
        return view('admin_layout') -> with('admin.bandoc.quanlybandoc',$manager_bandoc);
    }

    //thêm bạn đọc
    public function add_bandoc(Request $request) {
    	$data = array();
    	$data['hoten'] = $request->them_hoten;
    	$data['gioitinh'] = $request->them_gioitinh;
    	$data['sdt'] = $request->them_sdt;
    	$data['diachi'] = $request->them_diachi;   	
    	$data['ngaytao'] = $request->them_ngaytao;
    	$data['ngayhethan'] = $request->them_ngayhethan;
    	$data['trangthai'] = 0;

    	$result = DB::table('themuon')->insert($data);

        if($result) {

            return Redirect::to('/listbandoc-show');
        } else {

            return Redirect::to('/thembandoc-show');
        }   	
    }

    //xoá bạn đọc
    public function del_bandoc($idthe) {
        DB::table('themuon')-> where('idthe',$idthe)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('listbandoc-show');
    }

    //sửa bạn đọc
    public function edit_bandoc($idthe) {

        $edit_bandoc = DB::table('themuon')-> where('idthe', $idthe) -> get();
        $manager_bandoc = view('admin.bandoc.edit_bandoc') -> with('edit_bandoc',$edit_bandoc);
        return view('admin_layout') -> with('admin.bandoc.edit_bandoc',$manager_bandoc);
    }
    public function update_bandoc(Request $request,$idthe) {
        $data = array();
        $data['hoten'] = $request->sua_hoten;
        $data['gioitinh'] = $request->sua_gioitinh;
        $data['sdt'] = $request->sua_sdt;
        $data['diachi'] = $request->sua_diachi;    
        $data['ngaytao'] = $request->sua_ngaytao;
        $data['ngayhethan'] = $request->sua_ngayhethan;
        $data['trangthai'] = 0;

        DB::table('themuon')-> where('idthe',$idthe)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('listbandoc-show');
    }
    
}
