@extends('home_layout')
@section('home_content')
<style>
    .an {
        width: 800px;
        padding: 50px;
        margin-left: 200px;
    }
</style>
<div class="mainhd" style="">
    <div class="row" style="margin-top: 0px; margin-left: -30px;">
        <div class="col-md-2">
            <p class="chunho">Bến xe Đà Nẵng > Đặt vé</p>
        </div>
        <div class="col-md-9">
            <hr style="margin-left: -35px;">
        </div>
    </div>
    <div class="an box-tb" id="hide">
        <h3 style="text-align: center; margin-top: -20px">Đặt vé</h3>
        <p style="padding: 5px 10px 10px 10px;"><label style="color: #5E7BC6;">Chuyến xe:</label> Đà Nẵng đi Hà Nội</p>
        <div class="row" style="padding: 5px 10px 10px 10px; font-size: 13px;">
            <div class="col-md-7">
                <p><label style="color: #5E7BC6;">Điểm xuất phát:</label> Bến xe khách Đà Nẵng</p>
            </div>
            <div class="col-md-5">
                <p><label style="color: #5E7BC6;">Điểm đến:</label> Bến xe A</p>
            </div>
        </div>
        <div class="row" style="padding: 5px 10px 10px 10px;">
            <div class="col-md-7">
                <p><label style="color: #5E7BC6;">Ngày đi:</label> 16/06/2022</p>
            </div>
            <div class="col-md-5">
                <p><label style="color: #5E7BC6;">Thời gian:</label> 06:30 - 14:30</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6" style="padding-left: 25px;">
                <p style="text-align: center;"><label>Vị trí chỗ ngồi</label></p>
                <hr style="margin-top: -10px;">
                <img src="{{asset('public/frontend/img/volang.png')}}" alt="" style="margin-bottom: 15px;">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-right: 10px;">
                <p style="text-align: center;"><label>Thông tin khách hàng</label></p>
                <hr style="margin-top: -10px;">
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">Họ tên</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">Số điện thoại</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">CMND/CCCD</p>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">Ghi chú</p>
                    <input type="text" class="form-control">
                </div>
                <div class="row" style="padding-right: 20px;">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p style="font-size: 13px; display: inline">Vị trí ghế</p>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <p style="font-size: 13px; display: inline">Thành tiền</p>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn-xanh" style="margin-left: 300px; margin-top: 25px; height: 35px;" onclick="an()">Đặt vé</button>
    </div>
</div>

@endsection