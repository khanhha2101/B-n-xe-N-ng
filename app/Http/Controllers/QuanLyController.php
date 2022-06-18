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
        $month = date('m');
        $khachhang = DB::table('nguoidung')->where('chucvu', 2)->count();
        $chuyenxe = DB::table('chuyenxe')->where('trangthai', 0)->count();
        $get = DB::table('chitietve')->get();
        $doanhthu = 0;
        foreach ($get as $value) {
            $a = str_split($value->tgdat);
            $thang = $a[5] . $a[6];
            if ($month == $thang)
                $doanhthu += $value->giave * $value->slve;
        }

        $data = array();
        $tong = 0;
        $ngaytam = null;
        $thutam = 0;
        foreach ($get as $value) {

            $a = str_split($value->tgdat);
            $thang = $a[5] . $a[6];
            if ($month == $thang) {
                if ($ngaytam == null) {

                    $ngaytam = $value->tgdat;
                    $thutam += $value->giave * $value->slve;
                } else {

                    if ($ngaytam == $value->tgdat) {

                        $thutam += $value->giave * $value->slve;
                    } else {

                        $data[] = array(
                            'ngay' => $ngaytam,
                            'thu' => $thutam
                        );
                        $ngaytam = $value->tgdat;
                        $thutam = $value->giave * $value->slve;
                    }
                }
                $tong += $value->giave * $value->slve;
            }
        }
        $data[] = array(
            'ngay' => $ngaytam,
            'thu' => $thutam
        );

        return view('quanly.trangchinh')->with('kh', $khachhang)->with('cx', $chuyenxe)->with('dt', $doanhthu)->with('data', $data)->with('tong', $tong);
    }
    //
    public function trangquanly()
    {
        return view('quanly.trangquanly');
    }


    //trang cá nhân
    public function trangcanhan()
    {
        $mand = Session::get('id');
        $get = DB::table('nguoidung')->where('mand', $mand)->first();
        return view('quanly.trangcanhan')->with('thongtin', $get);
    }
    public function sua_thongtin(Request $request)
    {
        $mand = Session::get('id');
        $hoten = $request->hoten;
        $gioitinh = $request->gioitinh;
        $ngaysinh = $request->ngaysinh;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        $cmnd = $request->cmnd;
        DB::table('nguoidung')->where('mand', $mand)->update(['hoten' => $hoten, 'gioitinh' => $gioitinh, 'ngaysinh' => $ngaysinh, 'email' => $email, 'diachi' => $diachi, 'sdt' => $sdt, 'cmnd' => $cmnd]);
        return Redirect::to('/trangcanhan');
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
        DB::table('tuyen')->where('mat', $mat)->delete();
        return Redirect::to('/dstuyen');
    }


    //---hãng xe---
    public function dsdkhangxe()
    {
        $get = DB::table('nguoidung')->where('trangthai', 1)->get();
        return view('quanly.hangxe.dsdangkyhangxe')->with('hangxe', $get);
    }
    public function dshangxe()
    {
        $get = DB::table('nguoidung')->where('chucvu', 3)->where('trangthai', 0)->get();
        return view('quanly.hangxe.dshangxe')->with('hangxe', $get);
    }
    public function duyet_hangxe($mand)
    {
        DB::table('nguoidung')->where('mand', $mand)->update(['trangthai' => 0, 'chucvu' => 3]);
        return Redirect::to('/dsdkhangxe');
    }
    public function xoa_hangxe($mand)
    {
        DB::table('nguoidung')->where('mand', $mand)->update(['trangthai' => 0]);
        return Redirect::to('/dsdkhangxe');
    }


    //---chuyến xe---
    public function chuyenxe($mand)
    {
        $all = DB::table('chuyenxe')
            ->join('tuyen', 'tuyen.mat', '=', 'chuyenxe.mat')
            ->join('xe', 'xe.maxe', '=', 'chuyenxe.maxe')
            ->join('nguoidung', 'nguoidung.mand', '=', 'xe.mand')->get();
        $trangthais = array();
        foreach ($all as $key => $value) {
            $get = DB::table('chuyenxe')->where('macx', $value->macx)->first();
            $trangthais[$key] = $get->trangthai;
        }

        //lấy lịch trình
        $lichtrinh = array();
        foreach ($all as $key => $value) {
            $get = DB::table('lichtrinh')->where('macx', $value->macx)->get();
            $lt = "Thứ";
            foreach ($get as $val) {
                if ($val->ngaychay == "Mỗi ngày")
                    $lt = "Mỗi ngày";
                else
                    $lt .= " , " . $val->ngaychay;
            }
            $lichtrinh[$key] = $lt;
        }

        return view('quanly.hangxe.chuyenxe')->with('chuyenxe', $all)->with('lichtrinh', $lichtrinh)->with('trangthai', $trangthais);
    }
    public function xoa_chuyenxe($macx, $mand)
    {
        DB::table('lichtrinh')->where('macx', $macx)->delete();
        DB::table('chuyenxe')->where('macx', $macx)->delete();
        return Redirect::to('/chuyenxe' . '/' . $mand);
    }
    public function duyet_chuyenxe($macx, $mand)
    {
        DB::table('chuyenxe')->where('macx', $macx)->update(['trangthai' => 0]);
        return Redirect::to('/chuyenxe' . '/' . $mand);
    }
    public function xem_chuyenxe($macx, $mand)
    {
        $chuyenxe = DB::table('chuyenxe')
            ->join('tuyen', 'tuyen.mat', '=', 'chuyenxe.mat')
            ->join('xe', 'xe.maxe', '=', 'chuyenxe.maxe')
            ->where('macx', $macx)->first();
        
        //lấy trạng thái của chuyến xe
        $get = DB::table('chuyenxe')->where('macx', $macx)->first();
        $trangthai = $get->trangthai;

        //lấy tổng số ghế ngồi
        $soghe = 0;
        $get = DB::table('chitietxe')->where('maxe', $chuyenxe->maxe)->get();
        foreach ($get as $value)
            $soghe += $value->slghe;

        //lấy lịch trình
        $get = DB::table('lichtrinh')->where('macx', $macx)->get();
        $lt = "Thứ";
        foreach ($get as $val) {
            if ($val->ngaychay == "Mỗi ngày")
                $lt = "Mỗi ngày";
            else
                $lt .= " , " . $val->ngaychay;
        }

        //lấy tài xế
        $taixe = DB::table('taixe')
            ->join('nguoidung', 'taixe.mand', '=', 'nguoidung.mand')
            ->where('macx', $macx)->get();

        return view('quanly.hangxe.ctchuyenxe')->with('chuyenxe', $chuyenxe)->with('lichtrinh', $lt)->with('mand', $mand)->with('taixe', $taixe)->with('soghe', $soghe)->with('trangthai', $trangthai);
    }


    //---thống kê---
    public function thongke(Request $request)
    {
        $month = date('m');
        $khachhang = DB::table('nguoidung')->where('chucvu', 2)->count();
        $chuyenxe = DB::table('chuyenxe')->where('trangthai', 0)->count();
        $get = DB::table('chitietve')->get();
        $doanhthu = 0;
        foreach ($get as $value) {
            $a = str_split($value->tgdat);
            $thang = $a[5] . $a[6];
            if ($month == $thang)
                $doanhthu += $value->giave * $value->slve;
        }

        $loaitk = $request->loaitk;
        $date1 = $request->date1;
        $date2 = $request->date2;
        $data = array();
        $tong = 0;

        if ($loaitk == 'Doanh thu') {

            $ngaytam = null;
            $thutam = 0;
            foreach ($get as $value) {

                if ($value->tgdat <= $date2 && $value->tgdat >= $date1) {
                    if ($ngaytam == null) {

                        $ngaytam = $value->tgdat;
                        $thutam += $value->giave * $value->slve;
                    } else {

                        if ($ngaytam == $value->tgdat) {

                            $thutam += $value->giave * $value->slve;
                        } else {

                            $data[] = array(
                                'ngay' => $ngaytam,
                                'thu' => $thutam
                            );
                            $ngaytam = $value->tgdat;
                            $thutam = $value->giave * $value->slve;
                        }
                    }
                    $tong += $value->giave * $value->slve;
                }
            }
            $data[] = array(
                'ngay' => $ngaytam,
                'thu' => $thutam
            );
        }

        return view('quanly.trangchinh')->with('kh', $khachhang)->with('cx', $chuyenxe)->with('dt', $doanhthu)->with('data', $data)->with('tong', $tong);
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
