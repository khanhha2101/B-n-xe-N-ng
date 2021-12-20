@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhât bạn đọc
                        </header>
                        <div class="panel-body">
                            @foreach($edit_bandoc as $key => $value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-bandoc/'.$value->idthe)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label >Họ tên</label>
                                        <input type="text" value="{{$value->hoten}}" class="form-control" name="sua_hoten">
                                    </div>
                                    <div class="form-group">
                                        <label >Giới tính</label>
                                        <select class="form-control" name="sua_gioitinh" >
                                            <option value="Nam">Nam</option>
                                            <option value="Nữ">Nữ</option>
                                            <option value="Khác">Khác</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label >Số điện thoại</label>
                                        <input type="number" value="{{$value->sdt}}" class="form-control" name="sua_sdt">
                                    </div>
                                    <div class="form-group">
                                        <label >Địa chỉ</label>
                                        <input type="text" value="{{$value->diachi}}" class="form-control" name="sua_diachi">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày tạo</label>
                                        <input type="date" value="{{$value->ngaytao}}" class="form-control" name="sua_ngaytao">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày hết hạn</label>
                                        <input type="date" value="{{$value->ngayhethan}}" class="form-control" name="sua_ngayhethan">
                                    </div>
                                
                                <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
        </div>

@endsection