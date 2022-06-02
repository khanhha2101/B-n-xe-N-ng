@extends('home_layout')
@section('home_content')
<style>
    .bodycn {
        display: flex;
        font-family: "Poppins", sans-serif;
        height: 700px;
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
        font-size: 20px;
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
        font-size: 24px;
        margin-bottom: 8px;
    }

    .chunho {
        font-size: 12px;
        color: #9B9B9B;
        padding-top: 10px;
    }

    .btn-xanh2 {
        height: 40px;
        background-color: #05A162;
        color: white;
        border-radius: 5px;
        border: none;
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
    .thoat{
        min-width: 80px;
        padding: 16px 20px 11px 20px;
        font-size: 20px;
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
    .thea{
        font-size: 20px;
        text-align: center;
        color: #024751;
    }
    .thea:hover{
        text-decoration: none;
    }
</style>


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
                <div class="tab-item active">
                    <i class="tab-icon fas fa-pen-nib"></i>
                    Thông tin cá nhân
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-plus-circle"></i>
                    Đăng ký hãng xe
                </div>
                <div class="line"></div>
                <div class="thoat">
                    <i class="tab-icon fas fa-cog"></i>
                    <a href="{{URL::to('/dangxuat')}}" class="thea">Đăng xuất</a>
                </div>
            </div>

            <!-- Tab content -->
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col-md-1"><img src="{{asset('public/frontend/img/iconuser2.png')}}" alt=""></div>
                        <div class="col-md-5">
                            <button class="btn-xanh2 btn1">Chọn ảnh</button>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-xanh2 btn2">Cập nhật</button>
                        </div>
                    </div>
                </div>
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
                            <button class="btn-xanh2 btn2">Đăng ký</button>
                        </div>
                    </div>
                </div>
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