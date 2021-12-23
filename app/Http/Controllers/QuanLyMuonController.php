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
            ->join('themuon', 'themuon.idthe', '=', 'chitiet.idthe')->orderby('idct', 'desc')->get();

        $distinct = null;
        foreach ($all_chitiet as $key => $value) {
            if ($distinct != null) {
                $i = 0;
                foreach ($distinct as $key => $dis) {
                    if ($dis->hoten == $value->hoten && $dis->ngaymuon == $value->ngaymuon) {

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

        $manager_chitiet = view('admin.chitiet.quanlymuon')->with('all_chitiet', $distinct);
        return view('admin_layout')->with('admin.chitiet.quanlymuon', $manager_chitiet);
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

            return Redirect::to('/trasach-show');
        } else {

            return Redirect::to('/muonsach-show');
        }
    }
    //xoá 
    public function del_chitiet($idthe, $ngaymuon)
    {
        DB::table('chitiet')->where('idthe', $idthe)->where('ngaymuon', $ngaymuon)->delete();
        Session::put('message', 'Xóa thành công');
        return Redirect::to('trasach-show');
    }

    //sửa 
    public function edit_chitiet($idthe, $ngaymuon, $idct)
    {

        $thongtin = DB::table('chitiet')->where('idct', $idct)->get();

        $edit_chitiet = DB::table('chitiet')
            ->join('sach', 'sach.idsach', '=', 'chitiet.idsach')
            ->where('idthe', $idthe)->where('ngaymuon', $ngaymuon)->get();
        $manager_chitiet = view('admin.chitiet.trasach')->with('edit_chitiet', $edit_chitiet)->with('thongtin', $thongtin);
        return view('admin_layout')->with('admin.chitiet.trasach', $manager_chitiet);
    }
    public function update_chitiet(Request $request, $idthe, $ngaymuon)
    {

        $idcts = DB::table('chitiet')->where('idthe', $idthe)->where('ngaymuon', $ngaymuon)->get();

        $masach = $request->masach;

        $i = 0;

        foreach ($idcts as $key => $value) {

            $data = array();
            $data['idsach'] = $masach[$i];
            $data['idthe'] = $request->idthe;
            $data['ngaymuon'] = $request->ngaymuon;
            $data['ngaytra'] = $request->hantra;
            $data['ngaytrathucte'] = $request->ngaytra;

            $result = DB::table('chitiet')->where('idct', $value->idct)->update($data);

            $i++;
        }


        Session::put('message', 'Cập nhật thành công');
        return Redirect::to('trasach-show');
    }
}
