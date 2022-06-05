@extends('home_layout')
@section('home_content')
<style>
    .chunho {
        font-size: 12px;
        color: #9B9B9B;
        padding-top: 10px;
    }

    .btn-tim {
        height: 40px;
        background-color: #CBBCF0;
        color: white;
        border-radius: 5px;
        border: none;
    }
</style>

<div class="mainhd" style="padding-top: 20px; background-color: white; margin-bottom: 50px;">
    <div class="row" style="margin-top: 0px; margin-left: -30px;">
        <div class="col-md-2">
            <p class="chunho">Bến xe Đà Nẵng > Tìm kiếm</p>
        </div>
        <div class="col-md-9">
            <hr style="margin-left: -35px;">
        </div>
    </div>
    <div class="row" style="margin-top: 5px; ">
        <h4 style="font-weight: bold; font-size: 21px; margin-bottom: 15px;">Chuyến xe đi Hà Nội ngày 06/06/2022</h4>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tuyến đường</th>
                        <th>Hãng xe</th>
                        <th>Giá vé</th>
                        <th style="width:175px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                        <td>Tùng Vy</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Nha Trang</td>
                        <td>Đại Phát</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Cam Ranh</td>
                        <td>Vân Khôi</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                        <td>Tùng Vy</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                        <td>Hoàng Vân - Đà Nẵng</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Nha Trang</td>
                        <td>Đại Phát</td>
                        <td>380.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Cam Ranh</td>
                        <td>Vân Khôi</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                        <td>Tuấn Nam</td>
                        <td>365.000₫</td>
                        <td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <footer class="panel-footer">
            <div class="row">
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection