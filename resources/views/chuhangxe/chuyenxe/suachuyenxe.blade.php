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
                            <h4 class="tieude" style="margin-top: 0px;">Thông tin xe</h4>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Xe</p>
                                    <select class="form-control" name="maxe" onchange="load_ajax(this.value)">
                                        @foreach($xe as $key => $value)
                                        @if($value->maxe == $chuyenxe->maxe)
                                        <option value="{{$value->maxe}}" selected>XE{{$value->maxe}} - {{$value->bienso}}</option>
                                        @else
                                        <option value="{{$value->maxe}}">XE{{$value->maxe}} - {{$value->bienso}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="thongtinxe">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Loại xe</p>
                                    <p class="form-control">{{$chuyenxe->phanloai}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Số chỗ</p>
                                    <p class="form-control">{{$soghe}}</p>
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
                                        @if($value->diemcuoi == $chuyenxe->diemcuoi)
                                        <option value="{{$value->mat}}" selected>{{$value->diemdau}} đi {{$value->diemcuoi}} </option>
                                        @else
                                        <option value="{{$value->mat}}">{{$value->diemdau}} đi {{$value->diemcuoi}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Giá vé</p></label>
                                    <input type="text" class="form-control" name="giave" value="{{$chuyenxe->giave}}">
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
                                    <input type="text" class="form-control" name="diemden" value="{{$chuyenxe->diemden}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Thời gian khởi hành</p>
                                    <input type="text" class="form-control" name="tgdi" value="{{$chuyenxe->giodi}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Thời gian kết thúc</p>
                                    <input type="text" class="form-control" name="tgden" value="{{$chuyenxe->gioden}}">
                                </div>
                            </div>
                        </div>

                        <!-- lịch trình -->
                        <?php $mau = ['2', '3', '4', '5', '6', '7', 'CN', 'Mỗi ngày']; ?>
                        <div class="row">
                            <h4 class="tieude">Lịch trình chạy</h4>
                            <div style="margin-left: 15px;">
                                <?php $i = 0 ?>
                                @foreach($mau as $value)
                                @if($lichtrinh[$i]->ngaychay == $value)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$value}}" name="lich[]" checked>
                                    <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                        @if($value != 'Mỗi ngày' && $value != 'CN') Thứ {{$value}}
                                        @elseif($value == 'CN') CN
                                        @else Mỗi ngày
                                        @endif
                                    </p>
                                </div>
                                <?php if ($i < 2) $i++; ?>
                                @else
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$value}}" name="lich[]">
                                    <p class="form-check-label" for="flexCheckDefault" style="display: inline;">
                                        @if($value != 'Mỗi ngày' && $value != 'CN') Thứ {{$value}}
                                        @elseif($value == 'CN') CN
                                        @else Mỗi ngày
                                        @endif
                                    </p>
                                </div>
                                @endif
                                @endforeach
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
                                        @if($laichinh->mand == $value->mand)
                                        <option value="{{$value->mand}}" selected>TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @else
                                        <option value="{{$value->mand}}">TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p>Phụ xe</p>
                                    <select class="form-control" name="phuxe">
                                        @foreach($taixe as $key => $value)
                                        @if($phuxe->mand == $value->mand)
                                        <option value="{{$value->mand}}" selected>TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @else
                                        <option value="{{$value->mand}}">TX{{$value->mand}} - {{$value->hoten}} </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info" style="margin-top: 20px;">Cập nhật</button>

                    </form>
                    <button type="submit" class="btn btn-info" style="margin-top: 10px;">Xoá</button>
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