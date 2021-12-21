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
                                            <?php 
                                                $gioitinh = array();
                                                $gioitinh[1] = 'Nam';
                                                $gioitinh[2] = 'Nữ';
                                                $gioitinh[3] = 'Khác';
                                                foreach ($gioitinh as $key => $gt) {?>
                                                    
                                                    @if($gt == $value->gioitinh) 

                                                        <option selected value="<?php echo $gt ?>" ><?php echo $gt ?></option>
                                                    @else 

                                                        <option value="<?php echo $gt ?>" ><?php echo $gt ?></option>
                                                    @endif
                                                <?php }
                                             ?>
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
                                    <div class="form-group">
                                        <label >Trạng thái</label>
                                        <select class="form-control" name="sua_trangthai">
                                            <option value="0">0</option>
                                            @if($value->trangthai == 1)
                                                <option selected value="1">Đang mượn</option>
                                            @else
                                                <option value="1">Đang mượn</option>
                                            @endif
                                        </select>
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