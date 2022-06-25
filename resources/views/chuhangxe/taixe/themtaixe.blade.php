@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen')?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm tài xế
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/hx-themtaixe')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Họ tên</label>
                            <input type="text" class="form-control" name="hoten" value="">
                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select class="form-control" name="gioitinh">
                                <?php
                                $gioitinh = array();
                                $gioitinh[1] = 'Nam';
                                $gioitinh[2] = 'Nữ';
                                $gioitinh[3] = 'Khác';
                                foreach ($gioitinh as $key => $gt) { ?>                                  

                                    <option value="<?php echo $gt ?>"><?php echo $gt ?></option>
                                   
                                <?php }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="sdt" value="">
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh</label>
                            <input type="date" class="form-control" name="ngaysinh" >
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group">
                            <label>CCCD/CMND</label>
                            <input type="text" class="form-control" name="cmnd" value="">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" class="form-control" name="diachi" value="">
                        </div>
                        
                        <button type="submit" class="btn btn-info">Thêm</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection