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
                        <th>Chức vụ</th>
                        <th>Xe đang lái</th>
                        <th style="width:135px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>1</td>
                        <td>TX002</td>
                        <td>Nguyễn Văn A</td>
                        <td>0392748639</td>
                        <td>Lái chính</td>
                        <td>43C-294725</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuataixe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TX005</td>
                        <td>Nguyễn Văn B</td>
                        <td>0392748639</td>
                        <td>Lái chính</td>
                        <td>43C-294725</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuataixe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TX008</td>
                        <td>Nguyễn Văn C</td>
                        <td>0392748639</td>
                        <td>Lái chính</td>
                        <td>43C-294725</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuataixe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TX009</td>
                        <td>Nguyễn Văn D</td>
                        <td>0392748639</td>
                        <td>Lái chính</td>
                        <td>43C-294725</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuataixe')}}"> Chi tiết </a></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection