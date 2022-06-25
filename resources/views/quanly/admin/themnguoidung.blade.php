@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen')?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm tài khoản
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/sua-thongtin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="hoten" >
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="gioitinh">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                    <option>Khác</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="sdt" >
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name="ngaysinh" >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" >
                        </div>
                        <div class="form-group">
                            <label>CCCD/CMND</label>
                            <input type="text" class="form-control" name="cmnd" >
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" >
                        </div>
                        <div class="form-group">
                            <label>Chức vụ</label>
                            <select class="form-control" name="gioitinh">
                                    <option>Nhân viên trực bến</option>
                                    <option>Nhân viên trực cổng</option>
                                    <option>Quản lý</option>
                                    <option>Admin</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection