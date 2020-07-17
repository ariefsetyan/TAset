<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{url('kepala/pengajuan-distribusi')}}">
                    <i class="fa fa-th">
                    </i> <span>pengajuan distribusi</span>
                    @if(!empty($count = App\Distribusi::where('id_status', 2)->count()))
                        <small class="label pull-right bg-green">{{$count}}</small>
                    @else
                    @endif
                </a>
            </li>
            <li>
                <a href="{{url('kepala/daftar-distribusi')}}">
                    <i class="fa fa-th"></i> <span>daftar distribusi</span>
                </a>
            </li>
            <li>
                <a href="{{url('daftar-peminjaman')}}">
                    <i class="fa fa-th"></i> <span>daftar peminjaman</span>
                </a>
            </li>
            <li>
                <a href="{{url('daftar-barang-masuk')}}">
                    <i class="fa fa-th"></i> <span>daftar barang masuk</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
