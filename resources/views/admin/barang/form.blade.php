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
                        <h3 class="box-title">Form Barang</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{url('admin/simpan-barang')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Merek</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="merek">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Type</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tahun Keluaran</label>

                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tkeluaran">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tahun datang</label>

                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tdatang">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Stok</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Kondisi</label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="kondisi">
                                        <option>Baik</option>
                                        <option>Tidak Baik</option>
                                    </select>
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
    </section>
@endsection
