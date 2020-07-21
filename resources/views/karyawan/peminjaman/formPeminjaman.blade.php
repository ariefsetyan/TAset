@extends('karyawan.layouts.app')

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
                        <h3 class="box-title">Form Peminjaman</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{url('karyawan/simpan-peminjaman')}}" method="post">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tujuan Peminjaman</label>

                                <div class="col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="tujuan[]" value="Kebutuhan Di Area Rumahsakit">
                                            Kebutuhan Di Area Rumahsakit
                                        </label>
                                        <label>
                                            <input type="checkbox" name="tujuan[]" value="Kebutuhan Di Luar Area Rumahsakit">
                                            Kebutuhan Di Luar Area Rumahsakit
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Lama Peminjaman</label>

                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="lamaPinjam">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Diskripsi Barang</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="deskripsi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Barang</label>

                                <div class="col-sm-10">
{{--                                    <input type="text" class="form-control">--}}

{{------------------------------------------------------------------------------------------------------------------------}}
                                <table class="table" id="user_table" >
                                    <thead>
                                    <tr>
{{--                                        <th width="100%">Dokumen</th>--}}

                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                                </div>
{{----------------------------------------------------------------------------------------------------------------------------                                --}}
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

@push('script')
<script>
    $(document).ready(function(){
        var count = 1;
        dynamic_field(count);
        function dynamic_field(number)
        {
            html = '<tr>';
            html += '<td><select class="form-control select2" style="width: 100%;" name="barang[]">\n' +
                '                                        <option selected="selected" value="null">Select ...</option>\n' +
                '                                        @foreach($barangs as $barang)\n' +
                '                                            <option value="{{$barang->id}}">{{$barang->nama}}</option>\n' +
                '                                        @endforeach\n' +
                '                                    </select></td>';
            html += '<td><input type="text" name="jumlah[]" class="form-control" /></td>';
            // html += '<td><input type="text" name="last_name[]" class="form-control" /></td>';
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                $('tbody').append(html);
            }
            else
            {
                html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                $('tbody').html(html);
            }
        }

        $(document).on('click', '#add', function(){
            count++;
            dynamic_field(count);
        });

        $(document).on('click', '.remove', function(){
            count--;
            $(this).closest("tr").remove();
        });

        $('#dynamic_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                {{--url:'{{ route("proses-pengajuan") }}',--}}
                {{--method:'post',--}}
                {{--data:$(this).serialize(),--}}
                {{--dataType:'json',--}}
                {{--beforeSend:function(){--}}
                {{--    $('#save').attr('disabled','disabled');--}}
                {{--},--}}
                {{--success:function(data)--}}
                {{--{--}}
                {{--    if(data.error)--}}
                {{--    {--}}
                {{--        var error_html = '';--}}
                {{--        for(var count = 0; count < data.error.length; count++)--}}
                {{--        {--}}
                {{--            error_html += '<p>'+data.error[count]+'</p>';--}}
                {{--        }--}}
                {{--        $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');--}}
                {{--    }--}}
                {{--    else--}}
                {{--    {--}}
                {{--        dynamic_field(1);--}}
                {{--        $('#result').html('<div class="alert alert-success">'+data.success+'</div>');--}}
                {{--    }--}}
                {{--    $('#save').attr('disabled', false);--}}
                {{--}--}}
            })
        });

    });
</script>
@endpush
