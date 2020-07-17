@extends('kepala.layouts.app')

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
                                <th>nama banrang</th>
                                <th>landasa permintaan</th>
                                <th>alamat penerima</th>
                                <th>jumlah</th>
                                {{--                                <th>julmah</th>--}}
                                <th>status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datas as $data)
                                <tr>
                                    <td>{{$data->barang->nama}}</td>
                                    <td>{{$data->landasan_permintaan}}</td>
                                    <td>{{$data->tempat_penerima}}</td>
                                    {{--                                    <td>{{$data->barang->nama}}</td>--}}
                                    <td>{{$data->jumlah}}</td>
                                    @if($data->id_status == 1)
                                        <td>
                                            <span class="label label-warning">{{$data->status->status}}</span>
                                        </td>
                                    @elseif($data->id_status == 2)
                                        <td>
                                            <span class="label label-warning">{{$data->status->status}}</span>
                                        </td>

                                    @elseif($data->id_status == 3)
                                        <td><span class="label label-success">{{$data->status->status}}</span></td>

                                    @elseif($data->id_status == 4)
                                        <td><span class="label label-success">{{$data->status->status}}</span></td>

                                    @endif

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
    </script>
@endpush
