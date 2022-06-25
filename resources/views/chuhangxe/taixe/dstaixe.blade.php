@extends('quanly.trangquanly')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách tài xế
        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
                <select class="input-sm form-control w-sm inline v-middle" onchange="location = '{{URL::to('/listbandoc-show/')}}' + '/' + this.value;">
                    <option></option>
                    <option value="0">Tất cả</option>

                    <option value="..">..</option>

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
                        <th>STT</th>
                        <th>Mã tài xế</th>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Tuyến đang chạy</th>
                        <th>Chức vụ</th>
                        <th>Xe đang lái</th>
                        <th style="width:165px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <?php $i = 1; ?>
                    @foreach($taixe as $key => $value)
                    <tr>
                        <td>{{$i}}</td>
                        <td>TX{{$value->mand}}</td>
                        <td>{{$value->hoten}}</td>
                        <td>{{$value->sdt}}</td>
                        <td><?php if ($chuyenxe[$key] != null) echo 'Đà Nẵng đi ' . $chuyenxe[$key] ?></td>
                        <td>{{$chucvu[$key]}}</td>
                        <td>XE{{$xe[$key]}}</td>
                        <td>
                            <button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuataixe/'.$value->mand)}}"> Chi tiết </a></button>
                            @if($chuyenxe[$key] == null)<button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/hx-xoataixe/'.$value->mand)}}">Xóa</a></button> @endif
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection