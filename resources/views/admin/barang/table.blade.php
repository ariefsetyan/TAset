@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>serial</th>
                                <th>nama</th>
                                <th>merek</th>
                                <th>tahun</th>
                                <th>kondisi</th>
                                <th>tools</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                            <tr>
                                <td>{{$data->serial}}</td>
                                <td>{{$data->nama}}</td>
                                <td> {{$data->merek}}</td>
                                <td> {{$data->type}}</td>
                                <td>{{$data->tahun_keluaran}}</td>
                                <td>{{$data->tahun_datang}}</td>
                                <td>{{$data->kondisi}}</td>
                                <td>{{$data->stok}}</td>
                                <td>
                                    <a href="{{url('admin/edit-barang/'.$data->id)}}" type="button" class="btn btn-default btn-primary" >edit</a>
                                    <a href="{{url('admin/delete-barang/'.$data->id)}}" type="button" class="btn btn-default btn-danger delete-confirm" >delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>merek</th>
                                <th>tahun</th>
                                <th>kondisi</th>
                                <th>tools</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- DataTables -->

@endsection
@push('script')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })

        $('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });
    </script>

@endpush
