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
                        <th>Số chỗ</th>
                        <th>Tuyến đang chạy</th>
                        <th style="width:135px;"></th>
                    </tr>
                </thead>
                <tbody id="listBanDoc">
                    <tr>
                        <td>1</td>
                        <td>XE002</td>
                        <td>43C-123456</td>
                        <td>Xe ghế ngồi</td>
                        <td>20</td>
                        <td>Bến xe trung tâm Đà Nẵng đi Hà Nội</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuaxe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>XE005</td>
                        <td>43C-123456</td>
                        <td>Xe ghế ngồi</td>
                        <td>20</td>
                        <td>Bến xe trung tâm Đà Nẵng đi Sài Gòn</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuaxe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>XE007</td>
                        <td>43C-123456</td>
                        <td>Xe ghế ngồi</td>
                        <td>20</td>
                        <td>Bến xe trung tâm Đà Nẵng đi Hải Phòng</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuaxe')}}"> Chi tiết </a></button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>XE008</td>
                        <td>43C-123456</td>
                        <td>Xe ghế ngồi</td>
                        <td>20</td>
                        <td>Bến xe trung tâm Đà Nẵng đi Quảng Nam</td>
                        <td><button class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuaxe')}}"> Chi tiết </a></button></td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>

@endsection