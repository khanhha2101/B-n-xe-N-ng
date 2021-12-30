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
    </div>
</div>
<div class="row" style="margin-top: 70px;">
    <h2 style="text-align: center;">Thống kê số sách mượn trong tháng</h2>
</div>
<div class="row">
    <div id="myfirstchart" style="height: 400px;"></div>
</div>


<script>
    $(document).ready(function() {

        var data = <?= json_encode($data); ?>;

        var chart = new Morris.Area({
            element: 'myfirstchart',
            data: data,
            xkey: ['ngaymuon'],
            ykeys: ['sosach'],
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