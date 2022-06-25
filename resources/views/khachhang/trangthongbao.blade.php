@extends('home_layout')
@section('home_content')
<style>
    .chunho {
        font-size: 12px;
        color: #9B9B9B;
    }

    .thongbao {
        height: 30px;
        padding-top: 5px;
        border-radius: 3px;
    }

    .box-tb2 {
        margin-top: 30px;
        padding: 5px 5px 2px 10px;
        border-radius:  3px ;
        /* border: solid 1px #D9D9D9; */
        /* -webkit-box-shadow: 2px 5px 10px 2px #d4d1d4; */
    }
</style>
<div class="mainhd" style="padding-top: 20px; background-color: white; margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-1">
            <p class="chunho" style="padding-top: 10px;">Thông báo</p>
        </div>
        <div class="col-md-11">
            <hr style="margin-left: -30px;">
        </div>
    </div>

    <div class="row">
        <div class="col-md-9"></div>
        <div class="col-md-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search" name="keyword" id="keyword">
                <span class="input-group-btn">
                    <button class="btn btn-sm btn-default" type="button">Tìm</button>
                </span>
            </div>
        </div>
    </div>

    

    <div class="row box-tb2">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore itaque dignissimos labore quaerat natus commodi accusamus! Dicta expedita, dolor officiis, soluta ad nam impedit tenetur quis perspiciatis minus magni.</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row" style="height: 3px; background-color: #024F30; margin-top: 10px;"></div>
    <div class="row box-tb2">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore itaque dignissimos labore quaerat natus commodi accusamus! Dicta expedita, dolor officiis, soluta ad nam impedit tenetur quis perspiciatis minus magni.</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row" style="height: 3px; background-color: #024F30; margin-top: 10px;"></div>
    <div class="row box-tb2">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore itaque dignissimos labore quaerat natus commodi accusamus! Dicta expedita, dolor officiis, soluta ad nam impedit tenetur quis perspiciatis minus magni.</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row" style="height: 3px; background-color: #024F30; margin-top: 10px;"></div>
    <div class="row box-tb2">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore itaque dignissimos labore quaerat natus commodi accusamus! Dicta expedita, dolor officiis, soluta ad nam impedit tenetur quis perspiciatis minus magni.</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row" style="height: 3px; background-color: #024F30; margin-top: 10px;"></div>
    <div class="row box-tb2">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore itaque dignissimos labore quaerat natus commodi accusamus! Dicta expedita, dolor officiis, soluta ad nam impedit tenetur quis perspiciatis minus magni.</p>
        <p class="chunho">01/06/2022</p>
    </div>

    <div class="row" style="margin-top: 30px;">
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
</div>

@endsection