<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class DanhMucController extends Controller
{
    //

    ///tìm kiếm
    public function search (Request $request) {
        $output = '';
        $danhmucs = DB::table('danhmuc')
        -> where('tendm', 'LIKE', '%'.$request->keyword.'%') ->get();
        foreach ($danhmucs as $key => $value) {
            # code...
            $output .= '<tr>
                        <td>'.$value->iddm.'</td>
                        <td>'.$value->tendm.'</td>
                        <td>

                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to("/edit-danhmuc/"'.$value->iddm.')}}">  Sửa </a></button>

                            <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm("Bạn có chắc chắn muốn xóa không?")" href="{{URL::to("/del-danhmuc/"'.$value->iddm.')}}">Xóa</a></button>
                        </td>
                    </tr>';
            return response()->json($output);
        }
    }

    //form thêm danh mục
    public function themdanhmuc_show() {
    	return view('admin.danhmuc.themdanhmuc');
    }

    //hiển thị list 
    public function listdanhmuc_show() {

        $all_danhmuc = DB::table('danhmuc')-> get();
        $manager_danhmuc = view('admin.danhmuc.quanlydanhmuc') -> with('all_danhmuc',$all_danhmuc);
        return view('admin_layout') -> with('admin.danhmuc.quanlydanhmuc',$manager_danhmuc);
    }

    //thêm bạn đọc
    public function add_danhmuc(Request $request) {
    	$data = array();
    	$data['tendm'] = $request->them_tendm;

    	$result = DB::table('danhmuc')->insert($data);

        if($result) {

            Session::put('msg', '<script type="text/javascript">alert("Thêm thành công!");</script>');

            return Redirect::to('/listdanhmuc-show');
        } else {

            return Redirect::to('/themdanhmuc-show');
        }   	
    }

    //xoá bạn đọc
    public function del_danhmuc($iddm) {
        DB::table('danhmuc')-> where('iddm',$iddm)->delete();
        return Redirect::to('listdanhmuc-show');
    }

    //sửa bạn đọc
    public function edit_danhmuc($iddm) {

        $edit_danhmuc = DB::table('danhmuc')-> where('iddm', $iddm) -> get();
        $manager_danhmuc = view('admin.danhmuc.edit_danhmuc') -> with('edit_danhmuc',$edit_danhmuc);
        return view('admin_layout') -> with('admin.danhmuc.edit_danhmuc',$manager_danhmuc);
    }
    public function update_danhmuc(Request $request,$iddm) {
        $data = array();
        $data['tendm'] = $request->sua_tendm;

        DB::table('danhmuc')-> where('iddm',$iddm)->update($data);
        return Redirect::to('listdanhmuc-show');
    }
}
