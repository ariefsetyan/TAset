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
                        <h3 class="box-title">Data Table Pengajuan Peminjaman</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>nama Peminjam</th>
                                <th>nama baran</th>
                                <th>tangal pinjam</th>
                                <th>tujuan</th>
                                <th>estimasi</th>
                                <th>Deskripsi</th>
                                <th>Jumlah</th>
                                <th>tools</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $pinjam)
                                <tr>
                                    <td>{{$pinjam->user->name}}</td>
                                    <td>{{$pinjam->barang->nama}}</td>
                                    <td>{{$pinjam->tanggal_pinjam}}</td>
                                    <td>{{$pinjam->tujuan_pinjam}}</td>
                                    <td>{{$pinjam->estimasi_waktu}}</td>
                                    <td>{{$pinjam->diskripsi_barang}}</td>
                                    <td>{{$pinjam->jumlah}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{$pinjam->id}}" data-id_barang="{{$pinjam->id_barang}}">Proses</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>nama Peminjam</th>
                                <th>nama baran</th>
                                <th>tangal pinjam</th>
                                <th>tujuan</th>
                                <th>estimasi</th>
                                <th>Deskripsi</th>
                                <th>Jumlah</th>
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


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form pinjam</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{url('admin/proses-peminjaman')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control hidden" id="id" name="id">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control hidden" id="id_barang" name="id_barang">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">kodisi barang</label>
                            <input type="text" class="form-control" name="kondisi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var idBarang = button.data('id_barang') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            // modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body #id').val(id)
            modal.find('.modal-body #id_barang').val(idBarang)
        })
    </script>
@endpush
