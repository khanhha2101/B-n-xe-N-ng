@extends('quanly.trangquanly')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Đăng thông báo
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/add-bandoc')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Chuyến xe</label>
                            <select class="form-control" name="them_gioitinh">
                                <option value="Nam">CX002 - Đà Nẵng -> Hà Nội</option>
                                <option value="Nữ">CX003 - Đà Nẵng -> Hải Phòng</option>
                                <option value="Khác">CX004 - Đà Nẵng -> Hà Nội</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Thời gian</label>
                            <input type="date" class="form-control" name="them_sdt">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-info">Đăng</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection