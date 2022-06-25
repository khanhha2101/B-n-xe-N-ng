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

        return view('chuhangxe.chuyenxe.dschuyenxe')->with('chuyenxe', $all)->with('lichtrinh', $lichtrinh)->with('trangthai', $trangthais);
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

    public function sua_chuyenxe(Request $request)
    {
        //cập nhật bảng chuyến xe
        DB::table('chuyenxe')->where('macx', $request->macx)
            ->update(['maxe' => $request->maxe, 'mat' => $request->mat, 'diemden' => $request->diemden, 'giodi' => $request->tgdi, 'gioden' => $request->tgden, 'giave' => $request->giave, 'trangthai' => 1]);

        //cập nhật bảng tài xế
        DB::table('taixe')->where('macx', $request->macx)->where('vitri', 'Lái chính')
            ->update(['mand' => $request->laichinh]);
        DB::table('taixe')->where('macx', $request->macx)->where('vitri', 'Phụ xe')
            ->update(['mand' => $request->phuxe]);

        //cập nhật bảng lịch trình
        DB::table('lichtrinh')->where('macx', $request->macx)->delete();
        $lich = $request->lich;
        foreach ($lich as $val) {

            $data = array();
            $data['macx'] = $request->macx;
            $data['ngaychay'] = $val;
            DB::table('lichtrinh')->insert($data);
        }

        return Redirect::to('hx-viewsuachuyen/' . $request->macx);
    }

    public function xoa_chuyenxe($macx)
    {
        DB::table('taixe')->where('macx', $macx)->delete();
        DB::table('lichtrinh')->where('macx', $macx)->delete();
        DB::table('chuyenxe')->where('macx', $macx)->delete();

        return Redirect::to('/hx-dschuyen');
    }



    //xe
    public function dsxe()
    {
        $mand = Session::get('id');

        //lấy danh sách xe
        $xe = DB::table('xe')->where('mand', $mand)->get();
        //lấy tuyến đang chạy
        $tuyen = [];
        foreach ($xe as $key => $value) {
            $get = DB::table('chuyenxe')
                ->join('tuyen', 'chuyenxe.mat', '=', 'tuyen.mat')
                ->where('maxe', $value->maxe)->first();

            if ($get)
                $tuyen[$key] = $get->diemcuoi;
            else
                $tuyen[$key] = " ";
        }
        return view('chuhangxe.xe.dsxe')->with('xe', $xe)->with('tuyen', $tuyen);
    }
    public function view_themxe()
    {
        return view('chuhangxe.xe.themxe');
    }
    public function them_xe(Request $request)
    {
        $mand = Session::get('id');

        $socho = $request->socho;
        $soghe = $request->soghe;

        if ($socho[1] != null)

            $sotang = 2;
        else
            $sotang = 1;

        $data = array();
        $data['mand'] = $mand;
        $data['bienso'] = $request->bienso;
        $data['phanloai'] = $request->phanloai;
        $data['sotang'] = $sotang;
        $result = DB::table('xe')->insert($data);

        $get = DB::table('xe')->orderby('maxe', 'desc')->first();

        for ($i = 0; $i < 2; $i++)
            if ($socho[$i] != null) {

                $data = array();
                $data['maxe'] = $get->maxe;
                $data['tang'] = $i + 1;
                $data['slghe'] = $socho[$i];
                $data['slghe1hang'] = $soghe[$i];
                $result = DB::table('chitietxe')->insert($data);
            }

        return Redirect::to('hx-viewsuaxe/' . $get->maxe);
    }
    public function view_suaxe($maxe)
    {
        $xe = DB::table('xe')->where('maxe', $maxe)->first();
        $chitietxe = DB::table('chitietxe')->where('maxe', $maxe)->get();
        return view('chuhangxe.xe.suaxe')->with('xe', $xe)->with('chitietxe', $chitietxe);
    }
    public function sua_xe(Request $request)
    {
        $socho = $request->socho;
        $soghe = $request->soghe;
        $bienso = $request->bienso;
        $phanloai = $request->phanloai;
        $maxe = $request->maxe;

        $get = DB::table('xe')->where('maxe', $maxe)->update(['bienso' => $bienso, 'phanloai' => $phanloai]);

        for ($i = 0; $i < count($socho); $i++)
            if ($socho[$i] != null) {

                $tang = $i + 1;
                $get = DB::table('chitietxe')->where('maxe', $maxe)->where('tang', $tang)->update(['slghe' => $socho[$i], 'slghe1hang' => $soghe[$i]]);
            }

        return Redirect::to('hx-viewsuaxe/' . $maxe);
    }
    public function xoa_xe($maxe)
    {
        DB::table('chitietxe')->where('maxe', $maxe)->delete();
        DB::table('xe')->where('maxe', $maxe)->delete();

        Redirect::to('/hx-dsxe');
    }


    //tài xế
    public function dstaixe()
    {
        $mand = Session::get('id');

        $chu = DB::table('nguoidung')->where('mand', $mand)->first();

        //lấy danh sách tài xế
        $taixe = DB::table('nguoidung')->where('hangxe', $chu->hangxe)->where('chucvu', 4)->get();

        //lấy danh sách chuyến xe + xe + chức vụ
        $chuyenxe = [];
        $xe = [];
        $chucvu = [];
        foreach ($taixe as $key => $value) {
            $get = DB::table('taixe')->join('chuyenxe', 'chuyenxe.macx', '=', 'taixe.macx')
                ->join('tuyen', 'chuyenxe.mat', '=', 'tuyen.mat')
                ->join('xe', 'chuyenxe.maxe', '=', 'xe.maxe')->where('taixe.mand', $value->mand)->first();

            if ($get) {

                $chuyenxe[$key] = $get->diemcuoi;
                $xe[$key] = $get->maxe . ' - ' . $get->bienso;
                $chucvu[$key] = $get->vitri;
            } else
            {

                $chuyenxe[$key] = null;
                $xe[$key] = null;
                $chucvu[$key] = null;
            }
        }

        $manager = view('chuhangxe.taixe.dstaixe')
            ->with('chuyenxe', $chuyenxe)->with('xe', $xe)->with('chucvu', $chucvu)->with('taixe', $taixe);
        return view('quanly.trangquanly')->with('chuhangxe.taixe.dstaixe', $manager);
    }
    public function view_themtaixe()
    {
        return view('chuhangxe.taixe.themtaixe');
    }
    public function them_taixe(Request $request)
    {
        $mand = Session::get('id');
        $chu = DB::table('nguoidung')->where('mand', $mand)->first();

        $data = array();
        $data['hoten'] = $request->hoten;
        $data['gioitinh'] = $request->gioitinh;
        $data['ngaysinh'] = $request->ngaysinh;
        $data['cmnd'] = $request->cmnd;
        $data['sdt'] = $request->sdt;
        $data['email'] = $request->email;
        $data['diachi'] = $request->diachi;
        $data['hangxe'] = $chu->hangxe;
        $data['chucvu'] = 4;

        DB::table('nguoidung')->insert($data);

        return Redirect::to('/hx-dstaixe');
    }
    public function view_suataixe($mand)
    {
        $thongtin = DB::table('nguoidung')->where('mand', $mand)->first();
        return view('chuhangxe.taixe.suataixe')->with('thongtin', $thongtin);
    }
    public function sua_taixe()
    {
        return Redirect::to('/hx-dstaixe');
    }
    public function xoa_taixe($mand)
    {
        DB::table('nguoidung')->where('mand', $mand)->delete();
        return Redirect::to('/hx-dstaixe');
    }
}
