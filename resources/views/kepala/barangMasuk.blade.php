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
                        <th>serial</th>
                        <th>nama</th>
                        <th>merek</th>
                        <th>type</th>
                        <th>tahun keluaran</th>
                        <th>tahun datang</th>
                        <th>kondisi</th>
                        <th>stok</th>
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
{{--                            <td>--}}
{{--                                <a href="{{url('edit-barang/'.$data->id)}}" type="button" class="btn btn-default btn-primary" >edit</a>--}}
{{--                                <a href="{{url('delete-barang/'.$data->id)}}" type="button" class="btn btn-default btn-danger" >delete</a>--}}
{{--                            </td>--}}
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
