@extends('admin_layout')
@section('admin_content')

<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-2">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-eye"> </i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Visitors</h4>
                <h3>13,500</h3>
                <p>Other hand, we denounce</p>
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
                <h3>1,250</h3>
                <p>Other hand, we denounce</p>
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
                <h4>Sales</h4>
                <h3>1,500</h3>
                <p>Other hand, we denounce</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="col-md-3 market-update-gd">
        <div class="market-update-block clr-block-4">
            <div class="col-md-4 market-update-right">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </div>
            <div class="col-md-8 market-update-left">
                <h4>Orders</h4>
                <h3>1,500</h3>
                <p>Other hand, we denounce</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="col-md-12">
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
</div>
<div id="chart" style="height: 250px;"></div>
        


@endsection