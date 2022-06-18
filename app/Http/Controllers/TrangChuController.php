<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class TrangChuController extends Controller
{
    //
    public function home()
    {
        return view('trangchu');
    }
    //kiểm tra đăng nhập
    public function kiemtralogin(Request $request)
    {
        $taikhoan = $request->taikhoan;
        $matkhau = $request->matkhau;

        $result = DB::table('nguoidung')
            ->where('taikhoan', $taikhoan)->where('matkhau', $matkhau)->first();

        if ($result) {
            
            Session::put('id', $result->mand);
            Session::put('quyen', $result->chucvu);

            if ($result->chucvu == 7 || $result->chucvu == 8)

                return Redirect::to('/trangchinh');
            else if ($result->chucvu == 5 || $result->chucvu == 6)

                return Redirect::to('/trangchinh');
            else if ($result->chucvu == 3)

                return Redirect::to('/hx-dschuyen');
            else

                return Redirect::to('/');
        } else

            return Redirect::to('/login');
    }
    //login
    public function login()
    {
        return view('login');
    }
    //createaccount
    public function createaccount()
    {
        return view('createaccount');
    }
    //đăng xuất
    public function dangxuat()
    {
        Session::put('id', null);
        Session::put('quyen', null);
        return Redirect::to('/');
    }
    //trang thông báo
    public function trangthongbao()
    {
        return view('trangthongbao');
    }
    //trang tìm kiễm
    public function trangtimkiem()
    {
        return view('trangtimkiem');
    }
}
