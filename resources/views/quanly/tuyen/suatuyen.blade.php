@extends('quanly.trangquanly')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật tuyến xe
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/sua-tuyen')}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$tuyen->mat}}" name="mat">
                        <div class="form-group">
                            <label>Nơi đi</label>
                            <input type="text" class="form-control" value="Đà Nẵng" disabled>
                        </div>
                        <div class="form-group">
                            <label>Nơi đến</label>
                            <input type="text" class="form-control" name="diemden" value="{{$tuyen->diemcuoi}}">
                        </div>
                        <button type="submit" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>

@endsection