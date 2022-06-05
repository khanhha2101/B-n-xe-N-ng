@extends('quanly.trangquanly')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thông tin yêu cầu hỗ trợ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/add-bandoc')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Chuyến xe</label>
                            <input type="text" class="form-control" name="them_hoten" value="CX002 - Đà Nẵng -> Hà Nội">
                        </div>
                        <div class="form-group">
                            <label>Tài xếỉ</label>
                            <input type="text" class="form-control" name="them_diachi" value="Nguyễ Văn A">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="them_sdt" value="0492745863">
                        </div>
                        <div class="form-group">
                            <label>Thời gian</label>
                            <input type="text" class="form-control" name="them_sdt" value="01/06/2022">
                        </div>
                        <div class="form-group">
                            <label>Chi tiết sự cố</label>
                            <input type="text" class="form-control" name="them_ngaytao" value=".............................">
                        </div>
                        <div class="form-group">
                            <label>Giải quyết</label>
                            <input type="text" class="form-control" name="them_ngayhethan" value=".............................">
                        </div>

                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection