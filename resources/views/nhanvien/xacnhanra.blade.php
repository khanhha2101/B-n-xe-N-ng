@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen')?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Xác nhận xe vào bến
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/sua-thongtin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Chuyến xe</label>
                            <input type="text" class="form-control" name="hoten" value="CX01 - Đà Nẵng đi Hà Nội">
                        </div>
                        <div class="form-group">
                            <label>Xe</label>
                            <input type="text" class="form-control" name="diachi" value="XE01 - 43A2-50395">
                        </div>
                        <div class="form-group">
                            <label>Vị trí đỗ</label>
                            <input type="text" class="form-control" name="diachi" value="VTB02">
                        </div>
                        <div class="form-group">
                            <label>Giờ xuất bến</label>
                            <input type="text" class="form-control" name="diachi" value="06:45 - 01/06/2022">
                        </div>
                       
                        
                        <button type="submit" class="btn btn-info">Xác nhận</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection