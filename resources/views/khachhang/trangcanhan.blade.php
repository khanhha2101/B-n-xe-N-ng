@extends('home_layout')
@section('home_content')
<style>
    .bodycn {
        display: flex;
        font-family: "Poppins", sans-serif;
        height: 750px;
    }

    .bodycn>div {
        width: 100%;
    }

    .tabs {
        display: flex;
        position: relative;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 6px;
        border-radius: 15px;
        background-color: #024751;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 18px;
        text-align: center;
        color: #024751;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-icon {
        font-size: 24px;
        width: 32px;
        position: relative;
        top: 2px;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: #E3DEF1;
        border-color: #E3DEF1;
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .tab-pane h2 {
        font-size: 20px;
        margin-bottom: 8px;
    }

    .btn1 {
        margin-top: 45px;
        height: 35px;
        font-size: 14px;
        margin-left: 10px;
    }

    .btn2 {
        margin-top: 15px;
        height: 35px;
        width: 150px;
        text-align: center;
    }

    .inputText {
        height: 40px;
        margin: 10px 10px 20px 0px;
    }

    .thoat {
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 18px;
        text-align: center;
        color: #024751;
        background-color: #fff;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: 5px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .thoat:hover {
        opacity: 1;
        background-color: #E3DEF1;
        border-color: #E3DEF1;
    }

    .thea {
        font-size: 18px;
        text-align: center;
        color: #024751;
    }

    .thea:hover {
        text-decoration: none;
    }
</style>

<?php
$id = Session::get('id');
$quyen = Session::get('quyen');
?>

<div class="mainhd">
    <div class="row" style="margin-top: 20px;">
        <div class="col-md-2">
            <p class="chunho">Trang cá nhân</p>
        </div>
        <div class="col-md-10">
            <hr style="margin-left: -100px;">
        </div>
    </div>
    <div class="bodycn">

        <div>
            <!-- Tab items -->
            <div class="tabs">
                <!-- khách hàng -->
                <div class="tab-item active">
                    <i class="tab-icon fas fa-pen-nib"></i>
                    Thông tin cá nhân
                </div>
                @if($quyen == 2)
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Đăng ký hãng xe
                </div>
                @endif

                <!-- chủ hãng xe -->
                @if($quyen == 3)
                <div class="tab-item">
                    <i class="tab-icon fas fa-cog"></i>
                    Chuyến xe
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    Tuyến đường
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Danh sách xe
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-pen-nib"></i>
                    Danh sách tài xế
                </div>
                @endif

                <!-- tài xế -->
                @if($quyen==4)
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    Lịch làm việc
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Thông báo sự cố
                </div>
                @endif
                <div class="line"></div>
                <div class="thoat">
                    <i class="tab-icon fas fa-cog"></i>
                    <a href="{{URL::to('/dangxuat')}}" class="thea">Đăng xuất</a>
                </div>
            </div>

            <!-- Tab content -->
            <div class="tab-content">
                <!-- thông tin cá nhân -->
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col-md-1"><img src="{{asset('public/frontend/img/iconuser2.png')}}" alt=""></div>
                        <div class="col-md-5">
                            <button class="btn-xanh btn1">Chọn ảnh</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="Họ tên">
                            <input type="text" class="form-control inputText" placeholder="Giới tính">
                            <input type="date" class="form-control inputText" placeholder="Ngày sinh">
                            <input type="text" class="form-control inputText" placeholder="Địa chỉ">

                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="Số điện thoại">
                            <input type="text" class="form-control inputText" placeholder="Email">
                            <input type="text" class="form-control inputText" placeholder="CMND/CCCD">
                            @if($quyen == 4 || $quyen == 3)
                            <input type="text" class="form-control inputText" placeholder="Hãng xe">
                            @endif
                        </div>
                    </div>
                    @if($quyen == 4)
                    <!-- tài xế -->
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-2">
                            <p>Giấy phép lái xe</p>
                            <img class="anhtaixe" src="{{asset('public/frontend/img/imganh.png')}}" alt="">
                        </div>
                        <div class="col-md-3">
                            <p>Bảo hiểm y tế</p>
                            <img class="anhtaixe" src="{{asset('public/frontend/img/imganh.png')}}" alt="">
                        </div>
                    </div>
                    @endif
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Cập nhật</button>
                        </div>
                    </div>
                </div>
                <!-- đăng ký hãng xe -->
                @if($quyen == 2)
                <div class="tab-pane">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control inputText" placeholder="Tên chủ hãng xe">
                            <input type="text" class="form-control inputText" placeholder="Tên hãng xe">
                            <input type="text" class="form-control inputText" placeholder="Địa chỉ trụ sở">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Đăng ký</button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- chủ hãng xe -->
                @if($quyen == 3)
                <!-- chuyến -->
                <div class="tab-pane">
                    <!-- <p style="font-size: 14px;">Giai đoạn: 01/06/2022 - 30/06/2022</p> -->
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã số chuyến</th>
                                    <th>Tuyến đường</th>
                                    <th>Lịch trình</th>
                                    <th>Thời gian</th>
                                    <th>Giá vé</th>
                                    <th style="width:155px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>CX002</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 2, 4, 6</td>
                                    <td>8h - 14h</td>
                                    <td>365.000₫</td>
                                    <td><button class="btn-xanh">Chi tiết</button>
                                        <button class="btn-tim">Xoá</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CX005</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Mỗi ngày</td>
                                    <td>8h - 14h</td>
                                    <td>365.000₫</td>
                                    <td><button class="btn-xanh">Chi tiết</button>
                                        <button class="btn-tim">Xoá</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CX006</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 3, 5, 7</td>
                                    <td>8h - 14h</td>
                                    <td>365.000₫</td>
                                    <td><button class="btn-xanh">Chi tiết</button>
                                        <button class="btn-tim">Xoá</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>CX008</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Mỗi ngày</td>
                                    <td>8h - 14h</td>
                                    <td>365.000₫</td>
                                    <td><button class="btn-xanh">Chi tiết</button>
                                        <button class="btn-tim">Xoá</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Thêm chuyến</button>
                        </div>
                    </div>
                </div>
                <!-- tuyến -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã số tuyến</th>
                                    <th>Nơi đi</th>
                                    <th>Nơi đến</th>
                                    <!-- <th style="width:135px;"></th> -->
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>T002</td>
                                    <td>Đà Nẵng</td>
                                    <td>Hà Nội</td>
                                    <!-- <td><button class="btn-xanh">Chi tiết</button></td> -->
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>T005</td>
                                    <td>Đà Nẵng</td>
                                    <td>Sài Gòn</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>T007</td>
                                    <td>Đà Nẵng</td>
                                    <td>Quảng Nam</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>T009</td>
                                    <td>Đà Nẵng</td>
                                    <td>Huế</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Đăng ký tuyến</button>
                        </div>
                    </div>
                </div>
                <!-- xe -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã số xe</th>
                                    <th>Biển số</th>
                                    <th>Loại xe</th>
                                    <th>Số chỗ</th>
                                    <th>Tuyến đang chạy</th>
                                    <th style="width:135px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>XE002</td>
                                    <td>43C-123456</td>
                                    <td>Xe ghế ngồi</td>
                                    <td>20</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>XE005</td>
                                    <td>43C-123456</td>
                                    <td>Xe ghế ngồi</td>
                                    <td>20</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>XE007</td>
                                    <td>43C-123456</td>
                                    <td>Xe ghế ngồi</td>
                                    <td>20</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>XE008</td>
                                    <td>43C-123456</td>
                                    <td>Xe ghế ngồi</td>
                                    <td>20</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Quảng Nam</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Thêm xe</button>
                        </div>
                    </div>
                </div>
                <!-- tài xế -->
                <div class="tab-pane">
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã tài xế</th>
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Chức vụ</th>
                                    <th>Xe đang lái</th>
                                    <th style="width:135px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>TX002</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>0392748639</td>
                                    <td>Lái chính</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TX005</td>
                                    <td>Nguyễn Văn B</td>
                                    <td>0392748639</td>
                                    <td>Lái chính</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>TX008</td>
                                    <td>Nguyễn Văn C</td>
                                    <td>0392748639</td>
                                    <td>Lái chính</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>TX009</td>
                                    <td>Nguyễn Văn D</td>
                                    <td>0392748639</td>
                                    <td>Lái chính</td>
                                    <td>43C-294725</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Đăng ký</button>
                        </div>
                    </div>
                </div>
                @endif

                @if($quyen == 4)
                <!-- lịch làm việc -->
                <div class="tab-pane">
                    <p style="font-size: 14px;">Giai đoạn: 01/06/2022 - 30/06/2022</p>
                    <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã số chuyến</th>
                                    <th>Tuyến đường</th>
                                    <th>Thứ</th>
                                    <th>Thời gian</th>
                                    <th>Chức vụ</th>
                                    <th style="width:135px;"></th>
                                </tr>
                            </thead>
                            <tbody id="listBanDoc">
                                <tr>
                                    <td>1</td>
                                    <td>CX002</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 2</td>
                                    <td>8h - 14h</td>
                                    <td>Lái chính</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>CX005</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 4</td>
                                    <td>8h - 14h</td>
                                    <td>Lái chính</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>CX006</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 5</td>
                                    <td>8h - 14h</td>
                                    <td>Lái chính</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>CX008</td>
                                    <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                                    <td>Thứ 7</td>
                                    <td>8h - 14h</td>
                                    <td>Lái chính</td>
                                    <td><button class="btn-xanh">Chi tiết</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- thông báo sự cố -->
                <div class="tab-pane">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control inputText">
                                <option selected value="0"></option>
                                <option value="0">CX001 - Đà Nẵng -> Hà Nội</option>
                                <option value="1">CX002 - Đà Nẵng -> Hải Phòng</option>
                                <option value="1">CX003 - Đà Nẵng -> Sài Gòn</option>
                            </select>
                            <input type="text" class="form-control inputText" placeholder="Tên sự cố">
                            <input type="text" class="form-control inputText" placeholder="Chi tiết sự cố">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh btn2">Gửi thông báo</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>

<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    line.style.left = tabActive.offsetLeft + "px";
    line.style.width = tabActive.offsetWidth + "px";

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>

@endsection