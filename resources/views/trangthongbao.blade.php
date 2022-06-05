@extends('home_layout')
@section('home_content')
<style>
    .chunho {
        font-size: 12px;
        color: #9B9B9B;
    }

    .box-tb {
        /* background-color: #E3D8FE; */
        padding: 5px 5px 2px 10px;
        border-radius: 3px;
        box-shadow: 1px 1px 1px 1px #aaa;
    }

    .thongbao {
        height: 30px;
        /* background-color: #D2FEE1; */
        /* color: white; */
        padding-top: 5px;
        /* padding-left: 5px; */
        border-radius: 3px;
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

    <div class="row box-tb" style="margin-top: 20px; ">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Thông báo jsfdhkjghdfughadgiadjfinsdlrge jehgoaeh gaherg uaheroigha ủghauehrg ;aehrg uahergahdkfjg agh auihg iuah guiahjk gạdkfg ạkdfh gah giua hrgu ahdiu ghah ga hga hiughawirg hklajshg liuahrgi ig i áhgb gjvWUIGHwrgiHWGIGKJ GJ</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row box-tb" style="margin-top: 20px; ">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Thông báo jsfdhkjghdfughadgiadjfinsdlrge jehgoaeh gaherg uaheroigha ủghauehrg ;aehrg uahergahdkfjg agh auihg iuah guiahjk gạdkfg ạkdfh gah giu gu ahdiu ghah ga hga hiughawirg hklajshg liuahrgi ig i áhgb </p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row box-tb" style="margin-top: 20px; ">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Thông báo jsfdhkjghdfughadgiadjfinsdlrge jehgoaeh gaherg uaheroigha ủghauehrg ;aehrg uahergahdkfjg agh auihg iuah guiahjk gạdkfg ạkdfh gahgi uah rgu ahdiu ghah ga hga hiughawirg hklajshg liuahrgi ig i áhgb gjvWUIGHwrgiHWGIGKJ GJathathae dhgadg</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row box-tb" style="margin-top: 20px; ">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Thông báo jsfdhkjghdfughadgiadjfinsdlrge jehgoaeh gaherg uaheroigha ủghauehrg ;aehrg uahergahdkfjg agh auihg iuah guiahjk gạdkfg ạkdfh gahgiuahrgu ahdiu ghah ga hga hiughawirg hklajshg liuahrgi ig i áhgb gjvWUIGHwrgiHWGIGKJ GJ</p>
        <p class="chunho">01/06/2022</p>
    </div>
    <div class="row box-tb" style="margin-top: 20px; ">
        <h4 class="thongbao">Thông báo abc</h4>
        <p>Thông báo jsfdhkjghdfughadgiadjfinsdlrge jehgoaeh gaherg uaheroigha ủghauehrg ;aehrg uahergahdkfjg agh auihg iuah guiahjk gạdkfg ạkdfh gah giuah rgu ahdiu ghah ga hga hiughawirg hklajshg liuahrgi ig i áhgb gjvWUIGHwrgiHWGIGKJ GJ</p>
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