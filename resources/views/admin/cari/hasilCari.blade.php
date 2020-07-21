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
            <div class="col-md-8">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cari Barang</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{url('admin/proses-cari')}}" method="get">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="var">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">save</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>serial</th>
                                <th>nama</th>
                                <th>merek</th>
                                <th>type</th>
                                <th>tahun keluaran</th>
                                <th>kondisi</th>
                                <th>stok</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{$barang->serial}}</td>
                                <td>{{$barang->nama}}</td>
                                <td>{{$barang->merek}}</td>
                                <td>{{$barang->type}}</td>
                                <td>{{$barang->tahun_keluaran}}</td>
                                <td>{{$barang->kondisi}}</td>
                                <td>{{$barang->stok}}</td>
                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>serial</th>
                                <th>nama</th>
                                <th>merek</th>
                                <th>type</th>
                                <th>tahun keluaran</th>
                                <th>kondisi</th>
                                <th>stok</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
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
