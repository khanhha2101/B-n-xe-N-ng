<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bến xe khách Đà Nãng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <!-- <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' /> -->
    <!-- <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet" /> -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css" />
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>

    <style>
        .iconlogo {
            width: 40px;
            height: 40px;
            margin-top: 15px;
            font-style: bold;
        }

        .form-dn {
            margin-top: 40px;
            text-align: center;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <img src="{{asset('public/frontend/img/iconlogo.png')}}" class="iconlogo" alt="">
            </div>
            <div class="col-md-6">
                <h4 style="color: #024751; font-weight: bold; margin-top: 25px; margin-left: -50px;">BẾN XE KHÁCH ĐÀ NẴNG</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 form-dn">
                <h3 style="font-size: 20px; text-align: left;">Đăng ký</h3>
                <form method="get" action="{{URL::to('/home')}}">
                    <input type="text" class="form-control " style="margin-top: 35px; height: 40px; " placeholder="Họ tên">
                    <input type="text" class="form-control " style="margin-top: 15px; height: 40px; " placeholder="Tài khoản">
                    <input type="password" class="form-control " style="margin-top: 15px; height: 40px; " placeholder="Mật khẩu">
                    <input type="password" class="form-control " style="margin-top: 15px; height: 40px; " placeholder="Nhập lại mật khẩu">
                    <input type="text" class="form-control " style="margin-top: 15px; height: 40px; " placeholder="Số điện thoại">
                    <input type="text" class="form-control " style="margin-top: 15px; height: 40px; " placeholder="CMND/CCCD">
                    <button class="btn-xanh" style="margin-top: 30px; width: 100%;">Tạo tài khoản</button>
                </form>
                <div class="row" style="margin-top: 10px;">
                    <a href="{{URL::to('/login')}}">Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>


    <script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('public/backend/js/scripts.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>