@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhât sách
                        </header>
                        <div class="panel-body">
                            @foreach($edit_sach as $key => $value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-sach/'.$value->idsach)}}" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label >Tên sách</label>
                                        <input type="text" value="{{$value->tensach}}" class="form-control" name="sua_tensach">
                                    </div>

                                
                                <button type="submit" class="btn btn-info">Submit</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
        </div>

@endsection