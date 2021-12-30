@extends('admin_layout')
@section('admin_content')

<body>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thống kê bạn đọc
                </header>
                <div class="panel-body">
                    <form action="{{URL::to('/bandoc-thongke')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Ngày bắt đầu</label>
                                <input type="date" class="form-control" name="datethe1">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Ngày kết thúc</label>
                                <input type="date" class="form-control" name="datethe2">
                            </div>
                            <div class="form-group col-md-1" style="text-align: center;">
                                <button type="submit" class="btn" style="background-color: #4E73DF; color: white; margin-top: 20px; margin-left: 20px;">Thống kê</button>
                            </div>
                    </form>
                </div>

                <div class="row">
                    <div id="bieudothe" style="height: 400px;"></div>
                </div>
        </div>
        </section>

    </div>
    </div>


    <script>
        $(document).ready(function() {

            var data = <?= json_encode($data2); ?>;

            var chart = new Morris.Area({
                element: 'bieudothe',
                data: data,
                xkey: ['ngaymuon'],
                ykeys: ['sothe'],
                labels: ['Số bạn đọc']
            });
        });
    </script>
</body>

</html>

@endsection