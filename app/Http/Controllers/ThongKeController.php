<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class ThongKeController extends Controller
{
    //thống kê sách
    public function thongke_sach($date1, $date2)
    {
        ///dữ liệu bảng thống kê
        if ($date1 == 0) {
            $date = '2021-12-01';
            $date2 = '2021-12-30';
        } else {
            $date = $date1;
            $date2 = $date2;
        }

        $get = DB::table('chitiet')->whereBetween('ngaymuon', [$date, $date2])->get();

        $distinct = null;
        $slsach = 0;
        foreach ($get as $key => $value) {
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
        foreach ($distinct as $key => $cml) {
            $sach = 0;
            foreach ($get as $key => $chitiet) {
                if ($chitiet->ngaymuon == $cml->ngaymuon) {
                    $sach++;
                }
            }
            $data[] = array(
                'ngaymuon' => $cml->ngaymuon,
                'sosach' => $sach
            );
        }


        return view('admin.thongke.thongke_sach')->with('data', $data);
    }
    ///
    public function sach_thongke(Request $request)
    {
        ///dữ liệu bảng thống kê
        $date = $request->datesach1;
        $date2 = $request->datesach2;

        return Redirect::to('thongke-sach/' . $date . '&' . $date2);
    }
    //thống kê bạn đọc
    public function thongke_bandoc($date1, $date2)
    {
        ///dữ liệu bảng thống kê
        if ($date1 == 0) {
            $date = '2021-12-01';
            $date2 = '2021-12-30';
        } else {
            $date = $date1;
            $date2 = $date2;
        }

        $get = DB::table('chitiet')->whereBetween('ngaymuon', [$date, $date2])->get();

        $distinct = null;
        $ngaymuons = null;
        foreach ($get as $key => $value) {
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

            //lấy mảng các ngày mượn
            if ($ngaymuons != null) {
                $i = 0;
                foreach ($ngaymuons as $key => $nms) {
                    if ($nms == $value->ngaymuon) {

                        $i = 1;
                    }
                }
                if ($i == 0) {
                    $ngaymuons[] = $value->ngaymuon;
                }
            } else {
                $ngaymuons = array();
                $ngaymuons[] = $value->ngaymuon;
            }
        }

        $data = [];
        // 
        foreach($ngaymuons as $key => $ngay) {
            $sothe=0;
            foreach($distinct as $key => $dis) {
                if ($ngay == $dis->ngaymuon) {
                    $sothe++;
                }
            }
            $data[] = array(
                'ngaymuon' => $ngay,
                'sothe' => $sothe
            );
        }


        return view('admin.thongke.thongke_bandoc')->with('data2', $data);
    }
    ///
    public function bandoc_thongke(Request $request)
    {
        ///dữ liệu bảng thống kê
        $date = $request->datethe1;
        $date2 = $request->datethe2;

        return Redirect::to('thongke-bandoc/' . $date . '&' . $date2);
    }
}
