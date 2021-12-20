@extends('admin_layout')
@section('admin_content')

    <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhât danh mục
                        </header>
                        <div class="panel-body">
                            @foreach($edit_danhmuc as $key => $value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-danhmuc/'.$value->iddm)}}" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label >Tên danh mục</label>
                                        <input type="text" value="{{$value->tendm}}" class="form-control" name="sua_tendm">
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