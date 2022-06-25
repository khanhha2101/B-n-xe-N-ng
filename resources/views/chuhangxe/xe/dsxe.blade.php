@extends('quanly.trangquanly')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách xe
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
                        <th>Mã số xe</th>
                        <th>Biển số</th>
                        <th>Loại xe</th>
                        <th>Số tầng</th>
                        <th>Tuyến đang chạy</th>
                        <th style="width:165px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <?php $i = 1; ?>
                    @foreach($xe as $key => $value)
                    <tr>
                        <td>{{$i}}</td>
                        <td>XE{{$value->maxe}}</td>
                        <td>{{$value->bienso}}</td>
                        <td>{{$value->phanloai}}</td>
                        <td>{{$value->sotang}}</td>
                        <td>@if($tuyen[$key] != " ") Đà Nẵng đi {{$tuyen[$key]}} @endif </td>
                        <td>
                            <button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuaxe/'.$value->maxe)}}"> Chi tiết </a></button>
                            @if($tuyen[$key] == " ")<button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/hx-xoaxe/'.$value->maxe)}}">Xóa</a></button>  @endif
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