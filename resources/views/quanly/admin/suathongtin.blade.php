@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen')?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thông tin người dùng
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/sua-thongtin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="hoten" value="{{$thongtin->hoten}}">
                        </div>
                        @if($chucvu == 3)
                        <div class="form-group">
                            <label>Hãng xe</label>
                            <input type="text" class="form-control" name="diachi" value="{{$thongtin->hangxe}}">
                        </div>
                        @endif
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="gioitinh">
                                <?php
                                $gioitinh = array();
                                $gioitinh[1] = 'Nam';
                                $gioitinh[2] = 'Nữ';
                                $gioitinh[3] = 'Khác';
                                foreach ($gioitinh as $key => $gt) { ?>

                                    @if($gt == $thongtin->gioitinh)

                                    <option selected value="<?php echo $gt ?>"><?php echo $gt ?></option>
                                    @else

                                    <option value="<?php echo $gt ?>"><?php echo $gt ?></option>
                                    @endif
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="sdt" value="{{$thongtin->sdt}}">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name="ngaysinh" value="{{$thongtin->ngaysinh}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$thongtin->email}}">
                        </div>
                        <div class="form-group">
                            <label>CCCD/CMND</label>
                            <input type="text" class="form-control" name="cmnd" value="{{$thongtin->cmnd}}">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" value="{{$thongtin->diachi}}">
                        </div>

                        <div class="form-group">
                            <label>Chức vụ</label>
                            <select class="form-control" name="gioitinh">
                                <?php
                                $chucvu = array();
                                $chucvu[2] = 'Khách hàng';
                                $chucvu[3] = 'Chủ hãng xe';
                                $chucvu[4] = 'Tài xế';
                                $chucvu[5] = 'Nhân viên trực bến';
                                $chucvu[6] = 'Nhân viên trực cổng';
                                $chucvu[7] = 'Quản lý';
                                $chucvu[8] = 'Admin';
                                foreach ($chucvu as $key => $gt) { ?>

                                    @if($key == $thongtin->chucvu)

                                    <option selected value="<?php echo $key ?>"><?php echo $gt ?></option>
                                    @else

                                    <option value="<?php echo $key ?>"><?php echo $gt ?></option>
                                    @endif
                                <?php }
                                ?>
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