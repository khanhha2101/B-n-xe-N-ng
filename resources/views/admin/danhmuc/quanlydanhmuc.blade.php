@extends('admin_layout')
@section('admin_content')


	<div class="table-agile-info">
	  <div class="panel panel-default">
	    <div class="panel-heading">
	      Danh sách danh mục
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
	            <th>Mã danh mục</th>
	            <th>Tên danh mục</th>
	            <th style="width:135px;"></th>
	          </tr>
	        </thead>
	        <tbody id="listDanhMuc">
	        	@foreach($all_danhmuc as $key => $danhmuc)
                    <tr>
                        <td>{{$danhmuc -> iddm}}</td>
                        <td>{{$danhmuc -> tendm}}</td>
                        <td>

                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/edit-danhmuc/'.$danhmuc->iddm)}}">  Sửa </a></button>

                            <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/del-danhmuc/'.$danhmuc->iddm)}}">Xóa</a></button>
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