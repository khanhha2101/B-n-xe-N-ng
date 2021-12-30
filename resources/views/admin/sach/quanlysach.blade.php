@extends('admin_layout')
@section('admin_content')


<div class="table-agile-info">
	<?php
	$msg = Session::get('msg');
	if ($msg) {
		echo $msg;
		Session::put('msg', null);
	}

	?>
	<div class="panel panel-default">
		<div class="panel-heading">
			Quản lý Sách
		</div>
		<div class="row w3-res-tb">
			<div class="col-sm-5 m-b-xs">
				<select class="input-sm form-control w-sm inline v-middle" onchange="location = '{{URL::to('/loc-sach/')}}' + '/' + this.value;">
					<option></option>
					<option value="0">Tất cả</option>
					@foreach($all_danhmuc as $key => $danhmuc)
					<option value="{{$danhmuc -> iddm}}">{{$danhmuc -> tendm}}</option>
					@endforeach
				</select>
				<button class="btn btn-sm btn-default">Apply</button>
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-3">
				<div class="input-group">
					<input type="text" class="input-sm form-control" placeholder="Search" name="keyword" id="keyword">
					<span class="input-group-btn">
						<button class="btn btn-sm btn-default" type="button">Go!</button>
					</span>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-striped b-t b-light">
				<thead>
					<tr>
						<th>Mã đầu sách</th>
						<th>Tên danh mục</th>
						<th>Tên sách</th>
						<th>Số trang</th>
						<th>Phiên bản</th>
						<th>Tác giả</th>
						<th>Ngôn ngữ</th>
						<th>Năm xuất bản</th>
						<th>Nhà xuất bản</th>
						<th>Số lượng</th>
						<th style="width:135px;"></th>
					</tr>
				</thead>
				<tbody id="listSach">
					@foreach($all_sach as $key => $sach)
					<tr>
						<td>{{$sach -> IdDauSach}}</td>
						<td>{{$sach -> tendm}}</td>
						<td>{{$sach -> tensach}}</td>
						<td>{{$sach -> sotrang}}</td>
						<td>{{$sach -> phienban}}</td>
						<td>{{$sach -> tacgia}}</td>
						<td>{{$sach -> ngonngu}}</td>
						<td>{{$sach -> namxuatban}}</td>
						<td>{{$sach -> nhaxuatban}}</td>
						<td>{{$sach -> soluong}}</td>
						<td>

							<button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/edit-sach/'.$sach->idsach)}}"> Sửa </a></button>

							<button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/del-sach/'.$sach->idsach)}}">Xóa</a></button>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
		<footer class="panel-footer">
			<div class="row">


			</div>
		</footer>
	</div>
</div>


@endsection