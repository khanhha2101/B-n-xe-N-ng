@extends('home_layout')
@section('home_content')

<div class="mainhd" style="padding-top: 20px; background-color: white; margin-bottom: 50px;">
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
    <div class="row" style="margin-top: 15px; margin-left: -25px;">
        <div class="col-md-9">
            <h4 style="font-weight: bold; font-size: 21px; margin-bottom: 15px;">Chuyến xe đi Hà Nội ngày 06/06/2022</h4>
        </div>
        <div class="col-md-3" style="text-align: right;">
            <!-- <p style="text-align: right; font-size: 16px;" class="chunho">Sắp xếp</p> -->
            
        </div>
    </div>
    <div class="row">
        
        <!-- <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tuyến đường</th>
                        <th>Hãng xe</th>
                        <th>Giá vé</th>
                        <th style="width:135px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                        <td>Tùng Vy</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Nha Trang</td>
                        <td>Đại Phát</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Cam Ranh</td>
                        <td>Vân Khôi</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                        <td>Tùng Vy</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Nha Trang</td>
                        <td>Đại Phát</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Cam Ranh</td>
                        <td>Vân Khôi</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <!-- <button class="btn-tim">Xem</button> -->
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->
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
</div>
@endsection