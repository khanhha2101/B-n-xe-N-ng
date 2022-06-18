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

    <div class="row">
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Chuyến xe</h4>
                        <h3>{{$cx}} </h3>
                        <p></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Khách hàng</h4>
                        <h3> {{$kh}}</h3>
                        <p></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Doanh thu</h4>
                        <h3>{{$dt}}đ </h3>
                        <p><?php  ?></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="padding: 15px;">
        <div class="row" style="margin-top: 30px;">
            <div class="panel-body">
                <form action="{{URL::to('/thongke')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Loại thống kê</label>
                            <select class="form-control" name="loaitk">
                                <option>Doanh thu</option>
                                <option>Khách hàng</option>
                                <option>Chuyến xe</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Ngày bắt đầu</label>
                            <input type="date" class="form-control" name="date1">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Ngày kết thúc</label>
                            <input type="date" class="form-control" name="date2">
                        </div>
                        <div class="form-group col-md-1" style="text-align: center;">
                            <button type="submit" class="btn" style="background-color: #4E73DF; color: white; margin-top: 20px; margin-left: 20px;">Thống kê</button>
                        </div>
                </form>
            </div>
            <p style="text-align: right; font-size: 18px; font-weight: bold;">Tổng: {{$tong}}đ</p>
        </div>
        <div id="myfirstchart" style="height: 250px; margin-top: 20px;"></div>
    </div>

</div>

<script>
    $(document).ready(function() {

        var data = <?= json_encode($data); ?>;

        var chart = new Morris.Area({
            element: 'myfirstchart',
            data: data,
            xkey: ['ngay'],
            ykeys: ['thu'],
            labels: ['Thống kê']
        });
    });
</script>

@endsection