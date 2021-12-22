@extends('admin_layout')
@section('admin_content')


	<div class="table-agile-info">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      Danh sách bạn đọc
	    </div>
	    <div class="row w3-res-tb">
	      <div class="col-sm-5 m-b-xs">
	        <select class="input-sm form-control w-sm inline v-middle">
	          <option value="0">Bulk action</option>
	          <option value="1">Delete selected</option>
	          <option value="2">Bulk edit</option>
	          <option value="3">Export</option>
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
	            <th>Mã thẻ</th>
	            <th>Họ tên</th>
	            <th>Giới tính</th>
	            <th>Số điện thoại</th>
	            <th>Địa chỉ</th>
	            <th>Ngày tạo</th>
	            <th>Ngày hết hạn</th>
	            <th>Trạng thái</th>
	            <th style="width:135px;"></th>
	          </tr>
	        </thead>
	        <tbody id="listBanDoc">
	        	@foreach($all_bandoc as $key => $bandoc)
                    <tr>
                        <td>{{$bandoc -> idthe}}</td>
                        <td>{{$bandoc -> hoten}}</td>
                        <td>{{$bandoc -> gioitinh}}</td>
                        <td>{{$bandoc -> sdt}}</td>
                        <td>{{$bandoc -> diachi}}</td>
                        <td>{{$bandoc -> ngaytao}}</td>
                        <td>{{$bandoc -> ngayhethan}}</td>
                        <td>{{$bandoc -> trangthai}}</td>
                        <td>

                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/edit-bandoc/'.$bandoc->idthe)}}">  Sửa </a></button>

                            <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/del-bandoc/'.$bandoc->idthe)}}">Xóa</a></button>
                        </td>
                    </tr>
                @endforeach
	          
	        </tbody>
	      </table>
	    </div>
	    <footer class="panel-footer">
	      <div class="row">
	        
	        <div class="col-sm-5 text-center">
	          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
	        </div>
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