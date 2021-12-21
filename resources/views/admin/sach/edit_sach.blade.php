@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật sách 
                        </header>
                        <div class="panel-body">
                            @foreach($edit_sach as $key => $value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-sach/'.$value->idsach)}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="form-group">
                                        <label>Mã đầu sách</label>
                                        <input type="text" class="form-control" value="{{$value->IdDauSach}}" name="them_dausach">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sách</label>
                                        <input type="text" class="form-control" value="{{$value->tensach}}" name="them_tensach">
                                    </div>
                                        <label>Tên danh mục</label>
                                        <select class="form-control" name="them_iddm">
                                            @foreach($all_danhmuc as $key => $danhmuc)
                                                @if($danhmuc->iddm == $value->iddm)
                                                    <option selected value="{{$danhmuc -> iddm}}">{{$danhmuc -> tendm}}</option>
                                                @else
                                                    <option value="{{$danhmuc -> iddm}}">{{$danhmuc -> tendm}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Số trang</label>
                                        <input type="text" class="form-control" value="{{$value->sotrang}}" name="them_sotrang">
                                    </div>
                                    <div class="form-group">
                                        <label>Phiên bản</label>
                                        <input type="text" class="form-control" value="{{$value->phienban}}" name="them_phienban">
                                    </div>
                                    <div class="form-group">
                                        <label>Năm xuất bản</label>
                                        <input type="text" class="form-control" value="{{$value->namxuatban}}" name="them_namxuatban">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhà xuất bản</label>
                                        <input type="text" class="form-control" value="{{$value->nhaxuatban}}" name="them_nhaxuatban">
                                    </div>
                                    <div class="form-group">
                                        <label>Tác giả</label>
                                        <input type="text" class="form-control" value="{{$value->tacgia}}" name="them_tacgia">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngôn ngữ</label>
                                        <input type="text" class="form-control" value="{{$value->ngonngu}}" name="them_ngonngu" value="Việt Nam">
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" class="form-control" value="{{$value->soluong}}" name="them_soluong">
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