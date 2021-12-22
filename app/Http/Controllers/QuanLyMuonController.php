<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class QuanLyMuonController extends Controller
{
    //
    public function muonsach_show()
    {
        return view('admin.chitiet.muonsach');
    }
    public function trasach_show()
    {
        $all_chitiet = DB::table('chitiet')
        -> join('themuon', 'themuon.idthe', '=', 'chitiet.idthe')-> orderby('idct', 'desc')-> get();

        $distinct = null;
        foreach($all_chitiet as $key => $value) {
            if($distinct != null) {
                $i = 0;
                foreach($distinct as $key => $dis) {
                    if($dis->hoten == $value->hoten && $dis->ngaymuon == $value->ngaymuon){

                        $i=1;
                    }
                }
                if($i == 0) {
                    $distinct[] = $value;
                }
            } else {
                $distinct = array();
                $distinct[] = $value;
            }
        }

        $manager_chitiet = view('admin.chitiet.quanlymuon') -> with('all_chitiet',$distinct);
        return view('admin_layout') -> with('admin.chitiet.quanlymuon',$manager_chitiet);
    }
    //thêm
    public function add_chitiet(Request $request)
    {

        $masach = $request->masach;

        foreach ($masach as $key => $value) {
            if ($value) {

                $data = array();
                $data['idsach'] = $value;
                $data['idthe'] = $request->idthe;
                $data['ngaymuon'] = $request->ngaymuon;
                $data['ngaytra'] = $request->hantra;

                $result = DB::table('chitiet')->insert($data);
            }
        }

        if ($result) {

            return Redirect::to('/muonsach-show');
        } else {

            return Redirect::to('/trasach-show');
        }
    }
    //xoá 
    public function del_chitiet($idthe, $ngaymuon) {
        // DB::table('themuon')-> where('idthe',$idthe)->delete();
        // Session::put('message','Xóa thành công');
        // return Redirect::to('listbandoc-show');
    }

    //sửa 
    public function edit_chitiet($idthe, $ngaymuon, $idct) {

        $thongtin = DB::table('chitiet')->where('idct', $idct)->get();

        $edit_chitiet = DB::table('chitiet')
        -> join('sach', 'sach.idsach', '=', 'chitiet.idsach')
        -> where('idthe', $idthe)-> where('ngaymuon', $ngaymuon) -> get();
        $manager_chitiet = view('admin.chitiet.trasach') -> with('edit_chitiet',$edit_chitiet)->with('thongtin', $thongtin);
        return view('admin_layout') -> with('admin.chitiet.trasach',$manager_chitiet);
 
    }
    public function update_bandoc(Request $request,$idthe) {
        $data = array();
        $data['hoten'] = $request->sua_hoten;
        $data['gioitinh'] = $request->sua_gioitinh;
        $data['sdt'] = $request->sua_sdt;
        $data['diachi'] = $request->sua_diachi;    
        $data['ngaytao'] = $request->sua_ngaytao;
        $data['ngayhethan'] = $request->sua_ngayhethan;
        $data['trangthai'] = 0;

        DB::table('themuon')-> where('idthe',$idthe)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('listbandoc-show');
    }
}
