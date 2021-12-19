<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanDocController extends Controller
{
    //
    public function themBanDoc() {
    	return view('admin.themBanDoc');
    }
    public function danhSachBanDoc() {
    	return view('admin.quanlybandoc');
    }
}
