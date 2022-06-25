@extends('quanly.trangquanly')
@section('admin_content')
<?php $chucvu = Session::get('quyen') ?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật xe
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/hx-suaxe')}}" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <!-- thông tin xe -->
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 15px; margin-top: 15px;">Thông tin xe</h4>
                                <div class="form-group">
                                    <p style="display: inline;">Mã xe</p>
                                    <input type="text" class="form-control"  value="{{$xe->maxe}}" disabled>
                                    <input type="hidden" name="maxe" value="{{$xe->maxe}}">
                                </div>
                                <div class="form-group">
                                    <p>Biển số xe</p>
                                    <input type="text" class="form-control" name="bienso" value="{{$xe->bienso}}">
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;" >Loại xe</p>
                                    <select class="form-control" name="phanloai">
                                        <option value="Ghế ngồi" <?php if ($xe->phanloai == "Ghế ngồi") echo ('selected') ?>>Ghế ngồi</option>
                                        <option value="Giường nằm" <?php if ($xe->phanloai == "Giường nằm") echo ('selected') ?>>Giường nằm</option>
                                    </select>
                                </div>
                                @foreach($chitietxe as $val)
                                <div class="form-group">
                                    <label>Tầng {{$val->tang}}</label>
                                    <!-- <input type="text" class="form-control" name="hoten" value=""> -->
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số chỗ</p>
                                    <input type="number" class="form-control" name="socho[]" id="ghe" value="{{$val->slghe}}">
                                </div>
                                <div class="form-group">
                                    <p style="display: inline;">Số ghế trên 1 hàng</p>
                                    <input type="number" class="form-control" name="soghe[]" value="{{$val->slghe1hang}}">
                                    <p class="soghe" style="visibility:hidden;">{{$val->slghe1hang}}</p>
                                </div>
                                @endforeach

                            </div>
                            <!-- chi tiết xe -->
                            <div class="col-md-6">
                                <h4 style="margin-bottom: 35px; margin-top: 15px;">Chi tiết xe</h4>
                                <img src="{{asset('public/frontend/img/volang.png')}}" alt="" style="margin-bottom: 15px;">

                                @foreach($chitietxe as $val)
                                <?php $sohang = $val->slghe / $val->slghe1hang; ?>
                                @for($i = 1; $i<=$sohang; $i++) 
                                <div class="row">
                                    <div class="col-md-4">
                                        @for($j=1; $j<=$val->slghe1hang/2; $j++)
                                            <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                                        @endfor
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-4">
                                        @for($j=1; $j<=$val->slghe1hang/2; $j++)
                                            <img src="{{asset('public/frontend/img/chair.png')}}" alt="">
                                        @endfor
                                    </div>
                                </div>
                                @endfor
                                <div class="row" style="height: 30px;"></div>
                                @endforeach     
                                
                                <!-- <label class="btn btn-info" onclick="load_ajax()">Kiểm tra</label> -->
                        </div>
                </div>
                <button type="submit" class="btn btn-info" style="margin-top: 20px;">Cập nhật</button>
                </form>
            </div>

    </div>
    </section>

</div>
</div>


<script type="text/javascript">
    // const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    function load_ajax() {
        const sochos = $$(".soghe");
        var a = sochos[0].html();

        alert(a)
        // $.ajax({
        //     url: "{{URL::to('/chitietxe')}}",
        //     type: "get", // chọn phương thức gửi là get
        //     // dateType: "array", // dữ liệu trả về dạng text
        //     data: { // Danh sách các thuộc tính sẽ gửi đi
        //         maxe
        //     },
        //     success: function(result) {
        //         $('#thongtinxe').html(result);
        //     }
        // });
    }
</script>

@endsection