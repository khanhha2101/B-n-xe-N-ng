@extends('quanly.trangquanly')
@section('admin_content')

<style>
    .btn {
        /* font-weight: bold; */
    }
</style>

<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading" style="height: 50px; font-weight: bold;">
            <p style="font-size: 14px;">Thông tin xe</p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Mã xe</th>
                        <th>Biển số xe</th>
                        <th>Loại xe</th>
                        <th>Số tầng</th>
                        <th>Số chỗ</th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>XE{{$chuyenxe->maxe}}</td>
                        <td>{{$chuyenxe->bienso}}</td>
                        <td>{{$chuyenxe->phanloai}}</td>
                        <td>{{$chuyenxe->sotang}}</td>
                        <td>{{$soghe}}</td>
                </tbody>
            </table>
        </div>

        <div class="panel-heading" style="height: 50px; font-weight: bold;">
            <p style="font-size: 14px;">Lộ trình</p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tuyến đường</th>
                        <th>Điểm xuất phát</th>
                        <th>Điểm đến</th>
                        <th>Lịch trình</th>
                        <th>Giờ đi</th>
                        <th>Giờ đến</th>
                        <th>Giá vé</th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>Đà Nẵng đi {{$chuyenxe->diemcuoi}}</td>
                        <td>{{$chuyenxe->diemkhoihanh}}</td>
                        <td>{{$chuyenxe->diemden}}</td>
                        <td>{{$lichtrinh}}</td>
                        <td>{{$chuyenxe->giodi}}</td>
                        <td>{{$chuyenxe->gioden}}</td>
                        <td>{{$chuyenxe->giave}}</td>
                </tbody>
            </table>
        </div>

        <div class="panel-heading" style="height: 50px; font-weight: bold;">
            <p style="font-size: 14px;">Thông tin tài xế</p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Mã tài xế</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Chức vụ</th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <?php $i = 1 ?>
                    @foreach($taixe as $value)
                    <tr>
                        <td>{{$i}}</td>
                        <td>TX{{$value->mand}}</td>
                        <td>{{$value->hoten}}</td>
                        <td>{{$value->sdt}}</td>
                        <td>{{$value->vitri}}</td>
                    <tr>
                        <?php $i += 1 ?>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @if($chuyenxe->trangthai == 1)
    <button type="submit" class="btn btn-info">Duyệt</button>
    <button type="submit" class="btn" style="background-color: #FE8A8A; color:white;">Xoá</button>
    @else
    <button type="submit" class="btn btn-info">Đóng</button>
    @endif
</div>

@endsection