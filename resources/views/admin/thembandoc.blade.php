@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm bạn đọc
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                    <div class="form-group">
                                        <label >Họ tên</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Giới tính</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Số điện thoại</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Địa chỉ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày tạo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Ngày hết hạn</label>
                                        <input type="text" class="form-control">
                                    </div>
                                
                                <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

@endsection