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
        $all_danhmuc = DB::table('danhmuc')-> get();
    	return view('admin.sach.themsach')-> with('all_danhmuc',$all_danhmuc);
    }

    //hiển thị list 
    public function listsach_show() {

        //lấy danh mục
        $all_danhmuc = DB::table('danhmuc')-> get();

        $all_sach = DB::table('sach')
        -> join('danhmuc', 'danhmuc.iddm', '=', 'sach.iddm')-> orderby('idsach', 'desc')-> get();
        $manager_sach = view('admin.sach.quanlysach') -> with('all_sach',$all_sach)-> with('all_danhmuc',$all_danhmuc);
        return view('admin_layout') -> with('admin.sach.quanlysach',$manager_sach);
    }

    //thêm 
    public function add_sach(Request $request) {
    	$data = array();
    	$data['iddm'] = $request->them_iddm;
        $data['tensach'] = $request->them_tensach;
        $data['sotrang'] = $request->them_sotrang;
        $data['phienban'] = $request->them_phienban;
        $data['namxuatban'] = $request->them_namxuatban;
        $data['nhaxuatban'] = $request->them_nhaxuatban;
        $data['tacgia'] = $request->them_tacgia;
        $data['ngonngu'] = $request->them_ngonngu;
        $data['soluong'] = $request->them_soluong;
        $data['IdDauSach'] = $request->them_dausach;

    	$result = DB::table('sach')->insert($data);

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

        $all_danhmuc = DB::table('danhmuc')-> get();

        $edit_sach = DB::table('sach')-> where('idsach', $idsach)-> get();
        $manager_sach = view('admin.sach.edit_sach') -> with('edit_sach',$edit_sach)-> with('all_danhmuc',$all_danhmuc);
        return view('admin_layout') -> with('admin.sach.edit_sach',$manager_sach);
    }
    public function update_sach(Request $request,$idsach) {
        $data = array();
        $data['iddm'] = $request->them_iddm;
        $data['tensach'] = $request->them_tensach;
        $data['sotrang'] = $request->them_sotrang;
        $data['phienban'] = $request->them_phienban;
        $data['namxuatban'] = $request->them_namxuatban;
        $data['nhaxuatban'] = $request->them_nhaxuatban;
        $data['tacgia'] = $request->them_tacgia;
        $data['ngonngu'] = $request->them_ngonngu;
        $data['soluong'] = $request->them_soluong;
        $data['IdDauSach'] = $request->them_dausach;

        DB::table('sach')-> where('idsach',$idsach)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('listsach-show');
    }
}
