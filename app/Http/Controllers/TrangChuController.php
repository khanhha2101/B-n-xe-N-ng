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
            return Redirect::to('/home');
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
        return Redirect::to('/home');
    }
}
