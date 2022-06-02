<style>
    .containerhd {
        background-color: #E3D8FE;
        height: 100px;
        color: white;
    }

    .mainhd {
        margin-left: 120px;
        margin-right: 120px;

    }

    .iconlogo {
        width: 60px;
        height: 60px;
        margin-top: 20px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .lihd {
        float: left;
    }

    .menuhd {
        display: block;
        padding: 10px;
        color: #024751;
    }
</style>
<?php
$id = Session::get('id');
$quyen = Session::get('quyen');
?>
<div class="containerhd">
    <div class="mainhd">
        <div class="row">
            <div class="col-md-1">
                <img src="{{asset('public/frontend/img/iconlogo.png')}}" alt="" class="iconlogo">
            </div>
            <div class="col-md-6">
                <h3 style="color: #024751; font-weight: bold; margin-top: 25px; margin-left: -20px;">BẾN XE KHÁCH ĐÀ NẴNG</h3>
                <p style="color: #024751; font-size: 18px; margin-top: -5px; margin-left: -20px;">185 Tôn Đức Thắng, Liên Chiểu, Thành phố Đà Nẵng</p>
            </div>
            <div class="col-md-5">
                @if($id)
                <ul style="margin-top: 50px; margin-left: 20px;">
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/home')}}">Trang chủ</a></li>
                    <li class="lihd"><a class="menuhd" href="#contact">Tuyến đường</a></li>
                    <li class="lihd"><a class="menuhd" href="#news">Giới thiệu</a></li>
                    <li class="lihd" style="margin-top: 7px; margin-left: 50px;">
                        <div class="row" style="color: #024751;">
                            Chào bạn<a class="menuhd" style="display: inline;" href="{{URL::to('/canhan')}}"><img src="{{asset('public/frontend/img/iconuser.png')}}" style="height: 30px; width: 30px;" alt=""></a>
                        </div>
                    </li>
                </ul>
                @else
                <ul style="margin-top: 50px; margin-left: -5px;">
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/home')}}">Trang chủ</a></li>
                    <li class="lihd"><a class="menuhd" href="#contact">Tuyến đường</a></li>
                    <li class="lihd"><a class="menuhd" href="#news">Giới thiệu</a></li>
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/login')}}">Đăng nhập/Đăng ký</a></li>
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>