@extends('quanly.trangquanly')
@section('admin_content')

<div class="table-agile-info">
    <?php
    // $msg = Session::get('msg');
    // if ($msg) {
    // 	echo $msg;
    // 	Session::put('msg', null);
    // }

    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách đăng ký hãng xe
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



        <!--  -->
        <div class="tabiu">
            <div class="tabbox">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        <i class="tab-icon fas fa-code"></i>
                        Danh sách chuyến xe
                    </div>
                    <div class="tab-item">
                        <i class="tab-icon fas fa-cog"></i>
                        Chuyến xe chờ duyệt
                    </div>
                </div>

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã CX</th>
                                        <th>Tuyến xe</th>
                                        <th>Lịch trình</th>
                                        <th>Thời gian</th>
                                        <th>Giá vé</th>
                                        <th style="width:150px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="listBanDoc">
                                    <?php $i = 1 ?>
                                    @foreach($chuyenxe as $key => $value)
                                    @if($trangthai[$key] == 0)
                                    <tr>
                                        <td><?php echo ($i) ?></td>
                                        <td>CX{{$value->macx}}</td>
                                        <td>Đà Nẵng đi {{$value->diemcuoi}}</td>
                                        <td>{{$lichtrinh[$key]}}</td>
                                        <td>{{$value->giodi}} - {{$value->gioden}}</td>
                                        <td>{{$value->giave}}</td>
                                        <td>
                                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuachuyen/'.$value->macx)}}"> Xem </a></button>       
                                            <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/hx-xoachuyen/'.$value->macx)}}">Xóa</a></button>                       
                                        </td>
                                    </tr>
                                    <?php $i += 1 ?>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane">
                        <div class="table-responsive">
                            <table class="table table-striped b-t b-light">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã CX</th>
                                        <th>Tuyến xe</th>
                                        <th>Lịch trình</th>
                                        <th>Thời gian</th>
                                        <th>Giá vé</th>
                                        <th style="width:150px;"></th>
                                    </tr>
                                </thead>
                                <tbody id="listBanDoc">
                                    <?php $i = 1 ?>
                                    @foreach($chuyenxe as $key => $value)
                                    @if($trangthai[$key] == 1)
                                    <tr>
                                        <td><?php echo ($i) ?></td>
                                        <td>CX{{$value->macx}}</td>
                                        <td>Đà Nẵng đi {{$value->diemcuoi}}</td>
                                        <td>{{$lichtrinh[$key]}}</td>
                                        <td>{{$value->giodi}} - {{$value->gioden}}</td>
                                        <td>{{$value->giave}}</td>
                                        <td>
                                            <button type="submit" class="btn" style="background-color: #FDDC69;"><a href="{{URL::to('/hx-viewsuachuyen/'.$value->macx)}}"> Xem </a></button>

                                            <button type="submit" class="btn" style="background-color: #FE8A8A;"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/hx-xoachuyen/'.$value->macx)}}">Xóa</a></button>
                                        </td>
                                        
                                    </tr>
                                    <?php $i += 1 ?>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

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

<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>

@endsection