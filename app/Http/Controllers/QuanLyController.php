<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class QuanLyController extends Controller
{
    //
    public function trangchinh()
    {
        return view('quanly.trangchinh');
    }
    //
    public function trangquanly()
    {
        return view('quanly.trangquanly');
    }
    //trang cá nhân
    public function trangcanhan()
    {
        return view('quanly.trangcanhan');
    }
    //danh sách đăng ký hãng xe
    public function dsdkhangxe()
    {
        return view('quanly.dsdangkyhangxe');
    }

    //---tuyến---
    public function dstuyen()
    {
        $all = DB::table('tuyen')->get();
        return view('quanly.tuyen.danhsachtuyen')->with('tuyens', $all);
    }
    public function view_themtuyen()
    {
        return view('quanly.tuyen.themtuyen');
    }
    public function them_tuyen(Request $request)
    {
        $diemden = $request->diemden;
        if ($diemden != null) {
            $data = array();
            $data['diemdau'] = "Đà Nẵng";
            $data['diemcuoi'] = $diemden;
            $result = DB::table('tuyen')->insert($data);

            return Redirect::to('/dstuyen');
        } else {
            return Redirect::to('/view_themtuyen');
        }
    }
    public function view_suatuyen($mat)
    {
        $all = DB::table('tuyen')->where('mat', $mat)->first();
        return view('quanly.tuyen.suatuyen')->with('tuyen', $all);
    }
    public function sua_tuyen(Request $request)
    {
        $mat = $request->mat;
        $diemden = $request->diemden;

        $result = DB::table('tuyen')->where('mat', $mat)->update(['diemcuoi' => $diemden]);
        return Redirect::to('/dstuyen');
    }
    public function xoa_tuyen($mat)
    {
        DB::table('tuyen')-> where('mat',$mat)->delete();
        return Redirect::to('/dstuyen');
    }

    //----------NHÂN VIÊN-----------
    //đăng thông báo
    public function dangthongbao()
    {
        return view('nhanvien.dangthongbao');
    }
    //thông báo
    public function dsthongbao()
    {
        return view('nhanvien.dsthongbao');
    }
    //yêu cầu hỗ trợ
    public function dshotro()
    {
        return view('nhanvien.dshotro');
    }
    //chi tiết hỗ trợ
    public function chitiethotro()
    {
        return view('nhanvien.chitiethotro');
    }
}
