@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm sách 
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/add-sach')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="form-group">
                                        <label>Mã đầu sách</label>
                                        <input type="text" class="form-control" name="them_dausach">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên sách</label>
                                        <input type="text" class="form-control" name="them_tensach">
                                    </div>
                                        <label>Tên danh mục</label>
                                        <select class="form-control" name="them_iddm">
                                            @foreach($all_danhmuc as $key => $danhmuc)
                                            <option value="{{$danhmuc -> iddm}}">{{$danhmuc -> tendm}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Số trang</label>
                                        <input type="text" class="form-control" name="them_sotrang">
                                    </div>
                                    <div class="form-group">
                                        <label>Phiên bản</label>
                                        <input type="text" class="form-control" name="them_phienban">
                                    </div>
                                    <div class="form-group">
                                        <label>Năm xuất bản</label>
                                        <input type="text" class="form-control" name="them_namxuatban">
                                    </div>
                                    <div class="form-group">
                                        <label>Nhà xuất bản</label>
                                        <input type="text" class="form-control" name="them_nhaxuatban">
                                    </div>
                                    <div class="form-group">
                                        <label>Tác giả</label>
                                        <input type="text" class="form-control" name="them_tacgia">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngôn ngữ</label>
                                        <input type="text" class="form-control" name="them_ngonngu" value="Việt Nam">
                                    </div>
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input type="text" class="form-control" name="them_soluong">
                                    </div>
                                    
                                    
                                <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

@endsection