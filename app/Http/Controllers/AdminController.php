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

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard-show');
        } else {
            return Redirect::to('admin')->send();
        }
    }


    public function index() {
    	return view('admin_login');
    }

    //dashboard
    public function dashboard_show(){
        // $this->AuthLogin();

        ///dữ liệu bảng thống kê
        $date = '2021-12-01';
        $date2 = '2021-12-30';

        $get = DB::table('chitiet')->whereBetween('ngaymuon', [$date, $date2])->get();

        $distinct = null;
        $slsach = 0;
        $vipham = 0;
        foreach ($get as $key => $value) {
            //số sách mượn
            $slsach++;
            //số vi phạm
            if($value->ngaytrathucte > $value->ngaytra){
                $vipham++;
            }


            ////
            if ($distinct != null) {
                $i = 0;
                foreach ($distinct as $key => $dis) {
                    if ($dis->idthe == $value->idthe && $dis->ngaymuon == $value->ngaymuon) {

                        $i = 1;
                    }
                }
                if ($i == 0) {
                    $distinct[] = $value;
                }
            } else {
                $distinct = array();
                $distinct[] = $value;
            }
        }

        $data = [];
        foreach($distinct as $key => $value) {
            $sach = 0;
            foreach($get as $key => $chitiet) {
                if ($chitiet->ngaymuon == $value->ngaymuon){
                    $sach++;
                }
            }
            $data[] = array(
                'ngaymuon' => $value->ngaymuon,
                'sosach' => $sach
            );
        }


        //dữ liệu bạn đọc
        $bandoc = DB::table('themuon')->get();
        $bandocs=0;
        foreach($bandoc as $key => $value) {
            $bandocs++;
        }


        return view('admin.dashboard')->with('data', $data)->with('bandocs', $bandocs)->with('slsach', $slsach)->with('vipham', $vipham);
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
        // $this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
    
 
    //thống kê
    //gửi ngày
    public function send_date(Request $request) {

        $data = $request->all();
        $date = $data['date'];
        $date2 = $data['date2'];

        $get = DB::table('chitiet')->whereBetween('ngaymuon', [$date, $date2])->get();

        foreach($get as $key => $value) {
            $chart_data[] = array(
                'ngaymuon' => $value->ngaymuon,
                'sosach' => 15,
                'sothe' => 15
            );
        }

        echo $data = json_encode($chart_data);
        // return Redirect::to('/')->with('data', $data);
    }
}
