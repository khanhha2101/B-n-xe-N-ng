@extends('admin_layout')
@section('admin_content')

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Quản lý mượn sách
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/add-chitiet')}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Mã thẻ</label>
                            <input type="text" class="form-control" name="idthe">
                        </div>
                        <div class="form-group">
                            <label>Ngày mượn</label>
                            <input type="date" class="form-control" name="ngaymuon">
                        </div>
                        <div class="form-group">
                            <label>Hạn trả</label>
                            <input type="date" class="form-control" name="hantra">
                        </div>

                        <div class="form-group">
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
                                            <th>Sách</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td><input type="text" class="form-control" name="masach[]" list="exampleList"></td>


                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <!-- <td><input type="text" class="form-control" name="masach[]"></td> -->
                                            <td><input type="text" class="form-control" name="masach[]" list="exampleList"></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><input type="text" class="form-control" name="masach[]" list="exampleList"></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><input type="text" class="form-control" name="masach[]" list="exampleList"></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><input type="text" class="form-control" name="masach[]" list="exampleList"></td>
                                        </tr>
                                        <datalist id="exampleList">
                                            @foreach($sachs as $key => $sach)
                                            <option value="{{$sach->idsach.' - '.$sach->tensach}}">
                                            @endforeach
                                        </datalist>
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