@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Quản lý trả sách
            </header>
            <div class="panel-body">

                <div class="position-center">
                    @foreach($thongtin as $key => $value)
                    <form role="form" action="{{URL::to('/update-chitiet/'.$value->idthe.'&'.$value->ngaymuon)}}" method="post">
                        {{csrf_field()}}


                        <div class="form-group">
                            <label>Mã thẻ</label>
                            <input type="text" class="form-control" name="idthe" value="{{$value->idthe}}">
                        </div>
                        <div class="form-group">
                            <label>Ngày mượn</label>
                            <input type="date" class="form-control" name="ngaymuon" value="{{$value->ngaymuon}}">
                        </div>
                        <div class=" form-group">
                            <label>Hạn trả</label>
                            <input type="date" class="form-control" name="hantra" value="{{$value->ngaytra}}">
                        </div>
                        <div class=" form-group">
                            <label>Ngày trả</label>
                            <input type="date" class="form-control" name="ngaytra" value="{{$value->ngaytrathucte}}">
                        </div>
                        @endforeach

                        <div class=" form-group">
                            <div>
                                <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã sách</th>
                                            <th>Tên sách</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        @foreach($edit_chitiet as $key => $chitiet)
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>
                                                <input type="text" name="masach[]" value="{{$chitiet -> idsach}} " size="1"></input>
                                            </td>
                                            <td>{{$chitiet->tensach}}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection