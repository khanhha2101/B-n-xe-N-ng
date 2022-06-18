@extends('quanly.trangquanly')
@section('admin_content')
<style>
    .tieude {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .form-check {
        float: left;
        margin-right: 28px;
    }
</style>
<?php $chucvu = Session::get('quyen') ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Đăng ký chuyến xe
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/hx-themchuyen')}}" method="post">
                        {{csrf_field()}}

                        <!-- thông tin xe -->
                        <div class="row">
                            <h4 class="tieude">Thông tin xe</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Xe</p>
                                    <select class="form-control" name="maxe" onchange="load_ajax(this.value)">
                                        @foreach($xe as $key => $value)
                                        <option value="{{$value->maxe}}">XE{{$value->maxe}} - {{$value->bienso}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="thongtinxe">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Loại xe</p>
                                    <p class="form-control"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Số chỗ</p>
                                    <p class="form-control"></p>
                                </div>
                            </div>
                        </div>

                        <!-- lộ trình -->
                        <div class="row">
                            <h4 class="tieude">Lộ trình</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Tuyến xe</p>
                                    <select class="form-control" name="mat">
                                        @foreach($tuyen as $key => $value)
                                        <option value="{{$value->mat}}" onclick="load_ajax(this.value)">{{$value->diemdau}} đi {{$value->diemcuoi}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Giá vé</p></label>
                                    <input type="text" class="form-control" name="giave" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Điểm xuất phát</p>
                                    <input type="text" class="form-control" value="Bến xe khách Đà Nẵng">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Điểm đến</p>
                                    <input type="text" class="form-control" name="diemden" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Thời gian khởi hành</p>
                                    <input type="text" class="form-control" name="tgdi" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Thời gian kết thúc</p>
                                    <input type="text" class="form-control" name="tgden" value="">
                                </div>
                            </div>
                        </div>

                        <!-- lịch trình -->
                        <div class="row">
                            <h4 class="tieude">Lịch trình chạy</h4>
                            <div class="form-check" style="margin-left: 15px;">
                                <input class="form-check-input" type="checkbox" value="2" id="2" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 2
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="3" id="3" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 3
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="4" id="4" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 4
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="5" id="5" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 5
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="6" id="6" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 6
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="7" id="7" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Thứ 7
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="CN" id="cn" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    CN
                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Mỗi ngày" id="all" name="lich[]">
                                <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                    Mỗi ngày
                                </p>
                            </div>
                        </div>


                        <!-- tài xế -->
                        <div class="row">
                            <h4 class="tieude" style="margin-top: 30px;">Danh sách tài xế</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Lái chính</p>
                                    <select class="form-control" name="laichinh">
                                        @foreach($taixe as $key => $value)
                                        <option value="{{$value->mand}}">TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Phụ xe</p>
                                    <select class="form-control" name="phuxe">
                                        @foreach($taixe as $key => $value)
                                        <option value="{{$value->mand}}">TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info" style="margin-top: 40px;">Đăng ký</button>
                </div>
                </form>
            </div>

    </div>
    </section>

</div>
</div>

<script type="text/javascript">
    function load_ajax(maxe) {
        $.ajax({
            url: "{{URL::to('/thongtinxe')}}",
            type: "get", // chọn phương thức gửi là get
            // dateType: "array", // dữ liệu trả về dạng text
            data: { // Danh sách các thuộc tính sẽ gửi đi
                maxe
            },
            success: function(result) {
                $('#thongtinxe').html(result);
            }
        });
    }
</script>

@endsection