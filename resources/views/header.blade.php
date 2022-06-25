<style>
    .containerhd {
        background-color: #D2FEE1;
        height: 130px;
        color: white;
    }

    .mainhd {
        margin-left: 120px;
        margin-right: 120px;

    }

    .iconlogo {
        width: 60px;
        height: 60px;
        margin-top: 30px;
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
                <h3 style="color: #024751; font-weight: bold; margin-top: 35px; margin-left: -20px;">BẾN XE KHÁCH ĐÀ NẴNG</h3>
                <p style="color: #024751; font-size: 18px; margin-top: 0px; margin-left: -20px;">185 Tôn Đức Thắng, Liên Chiểu, Thành phố Đà Nẵng</p>
            </div>
            <div class="col-md-5">
                @if($id)
                <ul style="margin-top: 60px; margin-left: 20px;">
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/trangthongbao')}}">Thông báo</a></li>
                    <li class="lihd"><a class="menuhd" href="#news">Giới thiệu</a></li>
                    <li class="lihd" style="margin-top: 7px; margin-left: 50px;">
                        <?php
                        if ($quyen == 3)
                            $url = 'hx-dschuyen';
                        else if($quyen == 5 || $quyen == 6 || $quyen == 7 || $quyen == 8)
                            $url = 'trangchinh';
                        else
                            $url = 'canhan';
                        ?>
                        <div class="row" style="color: #024751;">
                            Chào bạn<a class="menuhd" style="display: inline;" href="{{URL::to('/'.$url)}}"><img src="{{asset('public/frontend/img/iconuser.png')}}" style="height: 30px; width: 30px;" alt=""></a>
                        </div>
                    </li>
                </ul>
                @else
                <ul style="margin-top: 50px; margin-left: -5px;">
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/trangthongbao')}}">Thông báo</a></li>
                    <li class="lihd"><a class="menuhd" href="#news">Giới thiệu</a></li>
                    <li class="lihd"><a class="menuhd" href="{{URL::to('/login')}}">Đăng nhập/Đăng ký</a></li>
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>