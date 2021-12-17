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

    ///dang nhap
    public function dashboard(Request $request){

    	return view('admin.dashboard');
    }

    //dashboard
    public function dashboard_show(){

    	return view('admin.dashboard');
    }
    //quan ly ban doc
    public function qlbandoc_show(){

    	return view('admin.quanlybandoc');
    }


}
