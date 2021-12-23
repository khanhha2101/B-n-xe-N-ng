@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Sách mượn</h4>
                    <h3><?php echo $slsach; ?></h3>
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
                    <h4>Bạn đọc</h4>
                    <h3><?php echo $bandocs; ?></h3>
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
                    <h4>Vi phạm</h4>
                    <h3><?php echo $vipham; ?></h3>
                    <p></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Orders</h4>
                <h3>1,500</h3>
                <p</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div> -->
    </div>
</div>

<!-- <div class="col-md-12">
    <form>
        <div class="col-md-3">
            <label>Từ ngày</label>
            <input type="date" class="form-control" name="tungay" id="date">
        </div>
        <div class="col-md-3">
            <label>Đến ngày</label>
            <input type="date" class="form-control" name="denngay" id="date2">
        </div>
        <div class="col-md-3">
            <input type="button" id="btn-lockq" value="Thống kê">
        </div>
    </form>
</div> -->
<div class="row" style="margin-top: 70px;">
    <h2 style="text-align: center;">Thống kê số sách mượn trong tháng</h2>
</div>
<div class="row">
    <div id="myfirstchart" style="height: 400px;"></div>
</div>


<script>
    $(document).ready(function() {
        // chart30daysorder();

        var data = <?= json_encode($data); ?>;

        var chart = new Morris.Area({
            element: 'myfirstchart',
            // lineColors: ['#819C97', '#658A83', '#16A085', '#C8F4F3', '#FDF9F9'],

            // pointFillColors: ['#ffffff'],
            // pointStrokeColors: ['black'],
            // fillOpacity: 0.6,
            // hideHover: 'auto',
            // parseTime: false,
            data: data,
            xkey: ['ngaymuon'],
            ykeys: ['sosach'],
            // behaveLikeLine: true,
            labels: ['Số sách mượn']
        });
    });




    $('#btn-lockq').click(function() {

        var date = $('#date').val();
        var date2 = $('#date2').val();

        $.ajax({
            url: "{{url('/send-date')}}",
            method: "POST",
            dataType: "JSON",
            data: {
                date: date,
                date2: date2
            },

            success: function(data) {
                chart.setData(data);
            }
        });
    });
</script>
@endsection