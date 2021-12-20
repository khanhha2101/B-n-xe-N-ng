<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class SachController extends Controller
{
    //
    //form thêm 
    public function themsach_show() {
    	return view('admin.sach.themsach');
    }

    //hiển thị list 
    public function listsach_show() {

        $all_sach = DB::table('sach')-> get();
        $manager_sach = view('admin.sach.quanlysach') -> with('all_sach',$all_sach);
        return view('admin_layout') -> with('admin.sach.quanlysach',$manager_sach);
    }

    //thêm 
    public function add_sach(Request $request) {
    	$data = array();
    	$data['sach'] = $request->them_tensach;

    	$result = DB::table('dansachhmuc')->insert($data);

        if($result) {

            return Redirect::to('/listsach-show');
        } else {

            return Redirect::to('/themsach-show');
        }   	
    }

    //xoá 
    public function del_sach($idsach) {
        DB::table('sach')-> where('idsach',$idsach)->delete();
        Session::put('message','Xóa thành công');
        return Redirect::to('listsach-show');
    }

    //sửa 
    public function edit_sach($idsach) {

        $edit_sach = DB::table('sach')-> where('idsach', $idsach) -> get();
        $manager_sach = view('admin.sach.edit_sach') -> with('sach',$edit_sach);
        return view('admin_layout') -> with('admin.sach.edit_sach',$manager_sach);
    }
    public function update_sach(Request $request,$idsach) {
        $data = array();
        $data['tensach'] = $request->sua_tensach;

        DB::table('sach')-> where('idsach',$idsach)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('listsach-show');
    }
}
