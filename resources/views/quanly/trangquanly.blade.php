<!DOCTYPE html>

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
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet" />
    <!-- <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" /> -->
    <link href="{{asset('public/frontend/css/quanlycss.css')}}" rel="stylesheet" />
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

    <!-- //tabIU -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

   <!-- ajax -->
   <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>

    <style>
        * {
            font-family: "Poppins", sans-serif;

        }
    </style>
</head>
<?php
$id = Session::get('id');
$quyen = Session::get('quyen');
?>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <img style="height: 40px; width: 40px;" src="{{asset('public/frontend/img/iconlogo1.png')}}" alt=""> Bến xe
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('public/backend/images/avt.png')}}">
                            <span class="username">

                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Cá nhân</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Cài đặt</a></li>
                            <li><a href="{{URL::to('/dangxuat')}}"><i class="fa fa-key"></i>Đăng xuất</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        @if($quyen == 7 || $quyen == 8)
                        <li>
                            <a class="active" href="{{URL::to('/trangchinh')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @endif

                        <!-- chủ hãng xe -->
                        @if($quyen == 3)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Chuyến xe</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/hx-viewthemchuyen')}}">Đăng ký chuyến xe</a></li>
                                <li><a href="{{URL::to('/hx-dschuyen')}}">Danh sách chuyến xe</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span>Tài xế</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/hx-viewthemtaixe')}}">Thêm tài xế</a></li>
                                <li><a href="{{URL::to('/hx-dstaixe')}}">Danh sách tài xế</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-cog"></i>
                                <span>Xe</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/hx-viewthemxe')}}">Thêm xe</a></li>
                                <li><a href="{{URL::to('/hx-dsxe')}}">Danh sách xe</a></li>
                            </ul>
                        </li>
                        @endif


                        <!-- nhân viên trực bến -->
                        @if($quyen == 5)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Thông báo</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/dangthongbao')}}">Đăng thông báo</a></li>
                                <li><a href="{{URL::to('/dsthongbao')}}">Danh sách thông báo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{URL::to('/dshotro')}}">
                                <i class="fa fa-th"></i>
                                <span>Yêu cầu hỗ trợ</span>
                            </a>
                        </li>
                        @endif

                        <!-- nhân viên trực cổng -->
                        @if($quyen == 6)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Xe trong bến</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/dangthongbao')}}">Danh sách xe</a></li>
                                <li><a href="{{URL::to('/dsthongbao')}}">Xác nhận xe vào bến</a></li>
                                <li><a href="{{URL::to('/dsthongbao')}}">Xác nhận xe xuất bến</a></li>
                            </ul>
                        </li>
                        @endif

                        <!-- quản lý -->
                        @if($quyen == 7)
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-th"></i>
                                <span>Hãng xe</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/dshangxe')}}">Danh sách hãng xe</a></li>
                                <li><a href="{{URL::to('/dsdkhangxe')}}">Danh sách đăng ký hãng xe</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Tuyến xe</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/dstuyen')}}">Danh sách tuyến xe</a></li>
                                <li><a href="{{URL::to('/view-themtuyen')}}">Thêm tuyến</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Thống kê</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/thongke-sach/0&0')}}">Thống kê sách</a></li>
                                <li><a href="{{URL::to('/thongke-bandoc/0&0')}}">Thống kê bạn đọc</a></li>
                            </ul>
                        </li>
                        @endif


                        <li>
                            <a href="{{URL::to('/trangcanhan')}}">
                                <i class="fa fa-user"></i>
                                <span>Thông tin cá nhân</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{URL::to('/dangxuat')}}">
                                <i class="fa fa-cog"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                @yield('admin_content')

            </section>
        </section>
        <!--main content end-->
    </section>




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

    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth: true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity: 0.85,
                data: [{
                        period: '2015 Q1',
                        iphone: 2668,
                        ipad: null,
                        itouch: 2649
                    },
                    {
                        period: '2015 Q2',
                        iphone: 15780,
                        ipad: 13799,
                        itouch: 12051
                    },
                    {
                        period: '2015 Q3',
                        iphone: 12920,
                        ipad: 10975,
                        itouch: 9910
                    },
                    {
                        period: '2015 Q4',
                        iphone: 8770,
                        ipad: 6600,
                        itouch: 6695
                    },
                    {
                        period: '2016 Q1',
                        iphone: 10820,
                        ipad: 10924,
                        itouch: 12300
                    },
                    {
                        period: '2016 Q2',
                        iphone: 9680,
                        ipad: 9010,
                        itouch: 7891
                    },
                    {
                        period: '2016 Q3',
                        iphone: 4830,
                        ipad: 3805,
                        itouch: 1598
                    },
                    {
                        period: '2016 Q4',
                        iphone: 15083,
                        ipad: 8977,
                        itouch: 5185
                    },
                    {
                        period: '2017 Q1',
                        iphone: 10697,
                        ipad: 4470,
                        itouch: 2038
                    },

                ],
                lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="{{asset('public/backendjs/monthly.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch (window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }

        });
    </script>
    <!-- //calendar -->

    <!-- tìm kiếm sách -->
    <!-- <script>
        $(document).ready(function() {
            $(document).on('keyup', '#keyword', function() {
                var keyword = $(this).val();

                $.ajax({
                    type: 'get',
                    url: 'search',
                    data: {
                        keyword: keyword
                    },
                    dataType: 'json',
                    success: function(respose) {
                        $('#listSach').html(respose);
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('keyup', '#keyword', function() {
                var keyword = $(this).val();

                $.ajax({
                    type: 'get',
                    url: 'searchdm',
                    data: {
                        keyword: keyword
                    },
                    dataType: 'json',
                    success: function(respose) {
                        $('#listDanhMuc').html(respose);
                    }
                });
            });
        });

        $(document).ready(function() {
            $(document).on('keyup', '#keyword', function() {
                var keyword = $(this).val();

                $.ajax({
                    type: 'get',
                    url: 'searchbd',
                    data: {
                        keyword: keyword
                    },
                    dataType: 'json',
                    success: function(respose) {
                        $('#listBanDoc').html(respose);
                    }
                });
            });
        });
    </script> -->

    <!-- thống kê -->



</body>



</html>