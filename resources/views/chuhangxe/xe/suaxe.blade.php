@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen') ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật xe
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/sua-thongtin')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <!-- thông tin xe -->
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 15px; margin-top: 15px;">Thông tin xe</h4>
                                <div class="form-group">
                                    <p style="display: inline;">Mã xe</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>
                                <div class="form-group">
                                    <p>Biển số xe</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Loại xe</p>
                                    <select class="form-control">
                                        <option>Ghế ngồi</option>
                                        <option>Giường nằm</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Tầng 1</label>
                                    <!-- <input type="text" class="form-control" name="hoten" value=""> -->
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số chỗ</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số ghế trên 1 hàng</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>
                                <div class="form-group">
                                    <label >Tầng 2</label>
                                    <!-- <input type="text" class="form-control" name="hoten" value=""> -->
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số chỗ</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số ghế trên 1 hàng</p>
                                    <input type="text" class="form-control" name="hoten" value="">
                                </div>

                            </div>
                            <!-- chi tiết xe -->
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 35px; margin-top: 15px;">Chi tiết xe</h4>
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
                        </div>


                        <button type="submit" class="btn btn-info" style="margin-top: 20px;">Thêm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection