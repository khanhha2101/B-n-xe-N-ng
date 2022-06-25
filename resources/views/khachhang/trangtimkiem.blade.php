@extends('home_layout')
@section('home_content')
<style>
    .an {
        width: 750px;
        height: 690px;
        display: none;
        position: absolute;
        background-color: white;
        border: solid 1.5px #8E8E8E;
        top: -60px;
        left: 300px;
        font-style: bold;
    }
</style>

<div class="mainhd" style="padding-top: 20px; background-color: white; margin-bottom: 50px; position: relative;">
    <div class="row" style="margin-top: 0px; margin-left: -30px;">
        <div class="col-md-2">
            <p class="chunho">Bến xe Đà Nẵng > Tìm kiếm</p>
        </div>
        <div class="col-md-9">
            <hr style="margin-left: -35px;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <input type="text" class="form-control inputText4" placeholder="Nhập điểm đến">
        </div>
        <div class="col-md-1">
            <img src="{{asset('public/frontend/img/vector2.png')}}" alt="">
        </div>
        <div class="col-md-4">
            <input type="date" class="form-control inputText4" placeholder="Ngày đi">
        </div>
        <div class="col-md-2">
            <button class="btn-xanh"><a href="{{URL::to('/trangtimkiem')}}" class="timkiem">Tìm chuyến</a></button>
        </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-left: -25px; margin-bottom: 5px;">
        <div class="col-md-9">
            <h4 style="font-weight: bold; font-size: 21px; margin-bottom: 15px;">Chuyến xe đi Hà Nội ngày 16/06/2022</h4>
        </div>
        <div class="col-md-3" style="text-align: right;">
            <!-- <p style="text-align: right; font-size: 16px;" class="chunho">Lọc</p> -->
            <a href="#"><img src="{{asset('public/frontend/img/loc3.png')}}" alt=""></a>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tuyến đường</th>
                        <th>Hãng xe</th>
                        <th>Lịch trình</th>
                        <th>Thời gian</th>
                        <th>Giá vé</th>
                        <th style="width:135px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Tùng Vy</td>
                        <td>Mỗi ngày</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh" onclick="hien()">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>Mỗi ngày</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh" onclick="hien()">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Đại Phát</td>
                        <td>Thứ 2, 4, 7</td>
                        <td>07:00 - 13:30</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh" onclick="hien()">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Vân Khôi</td>
                        <td>Mỗi ngày</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh" onclick="hien()">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>Thứ 2, 4, 7</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Tùng Vy</td>
                        <td>Mỗi ngày</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>Thứ 2, 4, 7</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Đại Phát</td>
                        <td>Thứ 2, 4, 7</td>
                        <td>07:00 - 13:30</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Vân Khôi</td>
                        <td>Thứ 2, 4, 7</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe khách Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>Mỗi ngày</td>
                        <td>07:00 - 13:30</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>


    <!-- div ẩn -->
    <div class="an box-tb" style="margin-top: 0px; " id="hide">
        <h4 style="text-align: center;">Đặt vé</h4>
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
                        <img src="{{asset('public/frontend/img/c1.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c2.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c11d.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c12.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c3.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c4.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c13.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c14d.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c5.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c6.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c15.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c16d.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c7.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c8.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c17.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c18.png')}}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c9.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c10.png')}}" alt="">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <img src="{{asset('public/frontend/img/c19.png')}}" alt="">
                        <img src="{{asset('public/frontend/img/c20.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding-right: 10px;">
                <p style="text-align: center;"><label>Thông tin khách hàng</label></p>
                <hr style="margin-top: -10px;">
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">Họ tên</p>
                    <input type="text" class="form-control" value="Nguyễn Văn A">
                </div>
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">Số điện thoại</p>
                    <input type="text" class="form-control" value="0395486621">
                </div>
                <div class="form-group" style="padding-right: 20px;">
                    <p style="font-size: 13px; display: inline">CMND/CCCD</p>
                    <input type="text" class="form-control" value="209574882">
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

<script>
    function hien() {
        document.getElementById("hide").style.display = "block";
    }

    function an() {
        document.getElementById("hide").style.display = "none";
    }
</script>
@endsection