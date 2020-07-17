<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="../widgets.html">
                    <i class="fa fa-th"></i> <span>Cari</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Data Barang</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/form-barang')}}"><i class="fa fa-circle-o"></i> Form Barang</a></li>
                    <li><a href="{{url('admin/daftar-barang')}}"><i class="fa fa-circle-o"></i> Daftar Barang</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Peminjaman</span>
                    <span class="pull-right-container">
                        @if(!empty($count = App\Peminjaman::where('id_status', 1)->count()))
                       <small class="label pull-right bg-green">{{$count}}</small>
                        @else
                        @endif
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{url('admin/pengajuan-pinjam')}}"><i class="fa fa-circle-o"></i>
                            Daftar Permintaan
                            <span class="pull-right-container">
                                @if(!empty($count = App\Peminjaman::where('id_status', 1)->count()))
                                    <small class="label pull-right bg-green">{{$count}}</small>
                                @else
                                @endif
                            </span>
                        </a>
                    </li>
                    <li><a href="{{url('admin/daftar-peminjaman')}}"><i class="fa fa-circle-o"></i> Daftar Peminjaman</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Distribusi</span>
                    <span class="pull-right-container">
                       @if(!empty($count = App\Distribusi::where('id_status', 1)->count()))
                            <small class="label pull-right bg-green">{{$count}}</small>
                        @else
                        @endif
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('admin/daftar-pengajuan')}}">
                            <i class="fa fa-circle-o"></i>
                            Daftar Permintaan
                            @if(!empty($count = App\Distribusi::where('id_status', 1)->count()))
                                <small class="label pull-right bg-green">{{$count}}</small>
                            @else
                            @endif
                        </a>
                    </li>
                    <li><a href="{{url('admin/daftar-distribusi')}}"><i class="fa fa-circle-o"></i> Daftar Distribusi</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Surat distribusi</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Form Surat</a></li>
                    <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Daftar Surat</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>laporan</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> barang masuk</a></li>
                    <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Distribusi</a></li>
                    <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> peminjaman</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
