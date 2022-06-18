<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class HangXeController extends Controller
{
    //chuyến xe
    public function dschuyenxe()
    {

        $mand = Session::get('id');

        $all = DB::table('chuyenxe')
            ->join('tuyen', 'tuyen.mat', '=', 'chuyenxe.mat')
            ->join('xe', 'xe.maxe', '=', 'chuyenxe.maxe')
            ->where('mand', $mand)->get();

        //lấy trạng thái
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

        return view('quanly.chuyenxe.dschuyenxe')->with('chuyenxe', $all)->with('lichtrinh', $lichtrinh)->with('trangthai', $trangthais);
    }

    public function view_themchuyenxe()
    {

        $mand = Session::get('id');

        //lấy danh sách xe đang chạy
        $xedangchay = DB::table('chuyenxe')
            ->join('xe', 'xe.maxe', '=', 'chuyenxe.maxe')
            ->where('mand', $mand)->get();
        //lấy tất cả xe
        $allxe = DB::table('xe')->where('mand', $mand)->get();
        //lọc những xe đang khôgn có chuyến
        $xe = array();
        foreach ($allxe as $value) {
            $kiemtra = 0;
            foreach ($xedangchay as $val) {
                if ($value->maxe == $val->maxe) {
                    $kiemtra = 1;
                }
            }
            if ($kiemtra == 0) {
                $xe[] = $value;
            }
        }

        //lấy danh sách các tuyến
        $tuyen = DB::table('tuyen')->get();

        //lấy hãng xe
        $get = DB::table('nguoidung')->where('mand', $mand)->first();
        //lấy tất cả tài xế của hãng
        $alltaixe = DB::table('nguoidung')->where('hangxe', $get->hangxe)->where('chucvu', 4)->get();
        //lấy danh sách tài xế đang chạy từ danh sách chuyến đang chạy ở trên
        $taixedangchay = array();
        foreach ($xedangchay as $value) {
            $get = DB::table('taixe')->where('macx', $value->macx)->get();
            foreach ($get as $val) {
                $taixedangchay[] = $val->mand;
            }
        }
        //lọc những tài xế không có chuyến
        $taixe = array();
        foreach ($alltaixe as $value) {
            $kiemtra = 0;
            foreach ($taixedangchay as $val) {
                if ($value->mand == $val) {
                    $kiemtra = 1;
                }
            }
            if ($kiemtra == 0) {
                $taixe[] = $value;
            }
        }


        return view('chuhangxe.chuyenxe.themchuyenxe')->with('xe', $xe)->with('tuyen', $tuyen)->with('taixe', $taixe);
    }

    public function them_chuyenxe(Request $request)
    {
        $lichtrinh = $request->lich;
        $laichinh = $request->laichinh;
        $phuxe = $request->phuxe;

        $data = array();
        $data['mat'] = $request->mat;
        $data['maxe'] = $request->maxe;
        $data['diemkhoihanh'] = 'Bến xe khách Đà Nẵng';
        $data['diemden'] = $request->diemden;
        $data['giodi'] = $request->tgdi;
        $data['gioden'] = $request->tgden;
        $data['giave'] = $request->giave;
        $data['trangthai'] = 1;

        $result = DB::table('chuyenxe')->insert($data);

        $get = DB::table('chuyenxe')->orderby('macx', 'desc')->first();

        //insert vào bảng lịch trình
        foreach ($lichtrinh as $value) {

            $data = array();
            $data['macx'] = $get->macx;
            $data['ngaychay'] = $value;
            $result = DB::table('lichtrinh')->insert($data);
        }

        //insert vào bảng tài xế
        $data = array();
        $data['macx'] = $get->macx;
        $data['mand'] = $laichinh;
        $data['vitri'] = 'Lái chính';
        $result = DB::table('taixe')->insert($data);

        $data = array();
        $data['macx'] = $get->macx;
        $data['mand'] = $phuxe;
        $data['vitri'] = 'Phụ xe';
        $result = DB::table('taixe')->insert($data);

        return Redirect::to('/hx-dschuyen');
    }

    ///ajax
    public function thongtinxe()
    {
        $maxe = $_GET['maxe'];

        $get = DB::table('xe')->where('maxe', $maxe)->first();

        $get2 = DB::table('chitietxe')->where('maxe', $maxe)->get();
        $socho = 0;
        foreach ($get2 as $value)
            $socho += $value->slghe;

        $st = '<div class="col-md-6">
            <div class="form-group">
                <p>Loại xe</p>
                <p class="form-control">' . $get->phanloai . '</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <p>Số chỗ</p>
                <p class="form-control">' . $socho . '</p>
            </div>
        </div>';
        echo ($st);
    }

    public function view_suachuyenxe($macx)
    {
        $mand = Session::get('id');

        //---lấy thông tin chuyến xe
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
        $lt = DB::table('lichtrinh')->where('macx', $macx)->get();

        //lấy tài xế
        $laichinh = DB::table('taixe')
            ->join('nguoidung', 'taixe.mand', '=', 'nguoidung.mand')
            ->where('macx', $macx)->where('vitri', 'Lái chính')->first();
        $phuxe = DB::table('taixe')
            ->join('nguoidung', 'taixe.mand', '=', 'nguoidung.mand')
            ->where('macx', $macx)->where('vitri', 'Phụ xe')->first();


        //---lấy các thông tin cần thiết
        //lấy danh sách xe đang chạy
        $xedangchay = DB::table('chuyenxe')
            ->join('xe', 'xe.maxe', '=', 'chuyenxe.maxe')
            ->where('mand', $mand)->get();
        //lấy tất cả xe
        $allxe = DB::table('xe')->where('mand', $mand)->get();
        //lọc những xe đang không có chuyến
        $xe = array();
        foreach ($allxe as $value) {
            $kiemtra = 0;
            foreach ($xedangchay as $val) {
                if ($value->maxe == $val->maxe) {
                    $kiemtra = 1;
                }
            }
            if ($kiemtra == 0) {
                $xe[] = $value;
            }
        }
        //thêm xe hiện tại vào 
        $xe[] = DB::table('xe')->where('maxe', $chuyenxe->maxe)->first();

        //lấy danh sách các tuyến
        $tuyen = DB::table('tuyen')->get();

        //lấy hãng xe
        $get = DB::table('nguoidung')->where('mand', $mand)->first();
        //lấy tất cả tài xế của hãng
        $alltaixe = DB::table('nguoidung')->where('hangxe', $get->hangxe)->where('chucvu', 4)->get();
        //lấy danh sách tài xế đang chạy từ danh sách chuyến đang chạy ở trên
        $taixedangchay = array();
        foreach ($xedangchay as $value) {
            $get = DB::table('taixe')->where('macx', $value->macx)->get();
            foreach ($get as $val) {
                $taixedangchay[] = $val->mand;
            }
        }
        //lọc những tài xế không có chuyến
        $taixe = array();
        foreach ($alltaixe as $value) {
            $kiemtra = 0;
            foreach ($taixedangchay as $val) {
                if ($value->mand == $val) {
                    $kiemtra = 1;
                }
            }
            if ($kiemtra == 0) {
                $taixe[] = $value;
            }
        }
        //thêm 2 tài xế đang chạy vào
        $taixe[] = DB::table('nguoidung')->where('mand', $laichinh->mand)->first();
        $taixe[] = DB::table('nguoidung')->where('mand', $phuxe->mand)->first();        

        $manager = view('chuhangxe.chuyenxe.suachuyenxe')
            ->with('chuyenxe', $chuyenxe)->with('lichtrinh', $lt)->with('laichinh', $laichinh)->with('phuxe', $phuxe)->with('soghe', $soghe)->with('trangthai', $trangthai)
            ->with('xe', $xe)->with('tuyen', $tuyen)->with('taixe', $taixe);;
        return view('quanly.trangquanly')->with('chuhangxe.chuyenxe.suachuyenxe', $manager);
    }



    //xe
    public function dsxe()
    {
        return view('chuhangxe.xe.dsxe');
    }
    public function view_themxe()
    {
        return view('chuhangxe.xe.themxe');
    }
    public function them_xe()
    {
        Redirect::to('/hx-dsxe');
    }
    public function view_suaxe()
    {
        return view('chuhangxe.xe.suaxe');
    }
    public function sua_xe()
    {
        Redirect::to('/hx-dsxe');
    }
    public function xoa_xe()
    {
        Redirect::to('/hx-dsxe');
    }


    //tài xế
    public function dstaixe()
    {
        return view('chuhangxe.taixe.dstaixe');
    }
    public function view_themtaixe()
    {
        return view('chuhangxe.taixe.themtaixe');
    }
    public function them_taixe()
    {
        Redirect::to('/hx-dstaixe');
    }
    public function view_suataixe()
    {
        return view('chuhangxe.taixe.suataixe');
    }
    public function sua_taixe()
    {
        Redirect::to('/hx-dstaixe');
    }
    public function xoa_taixe()
    {
        Redirect::to('/hx-dstaixe');
    }
}
