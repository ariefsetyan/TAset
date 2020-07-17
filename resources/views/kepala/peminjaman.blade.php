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

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>nama</th>
                        <th>tangal pinjam</th>
                        <th>tujuan</th>
                        <th>estimasi</th>
                        <th>julmah</th>
                        <th>status</th>
                        <th>tools</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->barang->nama}}</td>
                            <td>{{$data->tanggal_pinjam}}</td>
                            <td>{{$data->tujuan_pinjam}}</td>
                            <td>{{$data->estimasi_waktu}}</td>
                            <td>{{$data->jumlah}}</td>
                            @if($data->id_status == 1)
                                <td>
                                    <span class="label label-warning">{{$data->statusbarang->status}}</span>
                                </td>
{{--                                <td>--}}
{{--                                    --}}{{--                                            <a href="{{url('edit-pinjam/'.$data->id)}}" type="button" class="btn btn-default btn-primary" >edit</a>--}}
{{--                                    <a href="{{url('censel-peminjaman/'.$data->id)}}" type="button" class="btn btn-default btn-danger" >Censel</a>--}}
{{--                                </td>--}}
                            @elseif($data->id_status == 2)
                                <td>
                                    <span class="label label-warning">{{$data->statusbarang->status}}</span>
                                </td>
{{--                                <td>--}}
{{--                                    --}}{{--                                            <a href="#" type="button" class="btn btn-default btn-primary disabled" >edit</a>--}}
{{--                                    <a href="#" type="button" class="btn btn-default btn-danger disabled" >Cencel</a>--}}
{{--                                </td>--}}
                            @elseif($data->id_status == 3)
                                <td><span class="label label-success">{{$data->statusbarang->status}}</span></td>
{{--                                <td>--}}
{{--                                    --}}{{--                                            <a href="#" type="button" class="btn btn-default btn-primary disabled" >edit</a>--}}
{{--                                    <a href="#" type="button" class="btn btn-default btn-danger disabled" >Cencel</a>--}}
{{--                                </td>--}}
                            @elseif($data->id_status == 4)
                                <td><span class="label label-success">{{$data->statusbarang->status}}</span></td>
{{--                                <td>--}}
{{--                                    --}}{{--                                            <a href="#" type="button" class="btn btn-default btn-primary disabled" >edit</a>--}}
{{--                                    <a href="#" type="button" class="btn btn-default btn-danger disabled" >Cencel</a>--}}
{{--                                </td>--}}
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
                        <th>tools</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>

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
