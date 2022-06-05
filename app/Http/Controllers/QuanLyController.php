<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
