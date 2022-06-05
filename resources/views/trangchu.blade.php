@extends('home_layout')
@section('home_content')
<style>
	* {
		/* font-family: "Poppins", sans-serif; */
	}

	.boxtc1 {
		background-color: #024751;
		border-radius: 5px;
		height: 150px;
		padding-top: 55px;

	}

	.inputText {
		height: 40px;

	}
	.chunho {
        font-size: 12px;
        color: #9B9B9B;
        padding-top: 10px;
    }
	.timkiem{
		color: white;
	}
	.timkiem:hover{
		text-decoration: none;
		color: white;
	}
	.btn-tim {
        height: 40px;
        background-color: #CBBCF0;
        color: white;
        border-radius: 5px;
        border: none;
    }
</style>
<div class="mainhd" style="padding-top: 20px; background-color: white;">
	<div class="row" style="margin-top: 0px; margin-left: -30px;">
		<div class="col-md-2">
			<p class="chunho">Bến xe Đà Nẵng</p>
		</div>
		<div class="col-md-10">
			<hr style="margin-left: -100px;">
		</div>
	</div>
	<div class="row">
		<div class="boxtc1">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<input type="text" class="form-control inputText" placeholder="Nhập điểm đến">
			</div>
			<div class="col-md-1">
				<img src="{{asset('public/frontend/img/vector2.png')}}" alt="">
			</div>
			<div class="col-md-4">
				<input type="date" class="form-control inputText" placeholder="Ngày đi">
			</div>
			<div class="col-md-2">
				<button class="btn-xanh"><a href="{{URL::to('/trangtimkiem')}}" class="timkiem">Tìm vé xe</a></button>
			</div>
		</div>
	</div>
	<div class="row" style="margin-top: 30px;">
		<h4 style="font-weight: bold; font-size: 21px;">Đặt vé nhanh các tuyến đường từ Bến xe khách Đà Nẵng</h4>
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
						<td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
						<td>Tùng Vy</td>
						<td>365.000₫</td>
						<td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
					</tr>
					<tr>
						<td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
						<td>Hoàng Vân - Đà Nẵng</td>
						<td>365.000₫</td>
						<td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
					</tr>
					<tr>
						<td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
						<td>Đại Phát</td>
						<td>380.000₫</td>
						<td>
                            <button class="btn-xanh">Chọn ngay</button>
                            <button class="btn-tim">Xem</button>
                        </td>
					</tr>
					<tr>
						<td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
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
	<div class="row" style="margin-top: 20px; ">
		<h4 style="font-weight: bold; font-size: 21px;">Bảng giá vé xe Bến xe khách Đà Nẵng mới nhất Tháng 6 năm 2022</h4>
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