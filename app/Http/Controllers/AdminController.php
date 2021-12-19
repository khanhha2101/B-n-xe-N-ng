<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index() {
    	return view('admin_login');
    }

    //dashboard
    public function dashboard_show(){

        return view('admin.dashboard');
    }

    ///dang nhap
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('nguoidung')->where('taikhoan', $admin_email)->where('matkhau', $admin_password)->first();

        if($result) {

            Session::put('admin_name', $result->hoten);
            Session::put('admin_id', $result->idnd);

            return Redirect::to('/dashboard-show');
        } else {

            Session::put('message', 'Tai khoan hoac mat khau sai. Yeu cau nhap lai');

            return Redirect::to('/admin');
        }
    }

    //đăng xuất
    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
    
 
}
