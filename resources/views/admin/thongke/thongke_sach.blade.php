@extends('admin_layout')
@section('admin_content')

<body>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thống kê sách
                </header>
                <div class="panel-body">
                    <form action="{{URL::to('/sach-thongke')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Ngày bắt đầu</label>
                                <input type="date" class="form-control" name="datesach1">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Ngày kết thúc</label>
                                <input type="date" class="form-control" name="datesach2">
                            </div>
                            <div class="form-group col-md-1" style="text-align: center;">
                                <button type="submit" class="btn" style="background-color: #4E73DF; color: white; margin-top: 20px; margin-left: 20px;">Thống kê</button>
                            </div>
                    </form>
                </div>

                <div class="row">
                    <div id="bieudosach" style="height: 400px;"></div>
                </div>
        </div>
        </section>

    </div>
    </div>


    <script>
        $(document).ready(function() {

            var data = <?= json_encode($data); ?>;

            var chart = new Morris.Area({
                element: 'bieudosach',
                data: data,
                xkey: ['ngaymuon'],
                ykeys: ['sosach'],
                labels: ['Số sách mượn']
            });
        });
    </script>
</body>

</html>

@endsection