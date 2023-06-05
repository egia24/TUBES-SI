{{-- @include('layout/app') --}}
@section('content')
@include('layout/navbar')
@extends('layout/app')
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{url('profil')}}" class=""><i class="lnr lnr-user"></i> <span>Profil</span></a></li>
                <li><a href="/Barang" class=""><i class="lnr lnr-shirt"></i> <span>Barang</span></a></li>
                <li><a href="/Transaksi_pelanggan" class=""><i class="lnr lnr-cart"></i> <span>TransaksiPelanggan</span></a></li>
                <li><a href="/Transaksi_konsumen" class=""><i class="lnr lnr-cart"></i> <span>Transaksi Konsumen</span></a></li>
                <li><a href="/Jenis_transaksi" class=""><i class="lnr lnr-pushpin"></i> <span>Jenis Transaksi</span></a></li>
                <li><a href="/Transaksi_poin" class=""><i class="lnr lnr-database"></i> <span>Transaksi Poin</span></a></li>
                <li><a href="/Kritik_saran" class=""><i class="lnr lnr-bubble"></i> <span>Kritik & Saran</span></a></li>
                <li><a href="/Poin" class=""><i class="lnr lnr-database"></i> <span>Poin</span></a></li>
                <li><a href="/Konsumen" class="active"><i class="lnr lnr-users"></i> <span>Konsumen</span></a></li>
                <li><a href="/Pelanggan" class=""><i class="lnr lnr-users"></i> <span>Pelanggan</span></a></li>
                <li><a href="/Pegawai" class=""><i class="lnr lnr-user"></i> <span>Pegawai</span></a></li>
                <li><a href="/Distributor" class=""><i class="lnr lnr-users"></i> <span>Distributor</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
<!-- MAIN CONTENT -->
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- TABLE DISTRIBUTOR -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">KONSUMEN</h3><br>
                        <button> <a href="/iKonsumen" type="button" class="btn btn-success">Tambah Data</a></button>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Konsumen</th>
                                    <th>Nama Konsumen</th>
                                    <th>Telepon Konsumen</th>
                                    <th>Email Konsumen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $konsumens)
                                <tr>
                                    <th>{{$konsumens->id_konsumen}}</th>
                                    <th>{{$konsumens->nama_konsumen}}</th>
                                    <th>{{$konsumens->telepon_konsumen}}</th>
                                    <th>{{$konsumens->email_konsumen}}</th>
                                    <td>
                                        <a href="/editKonsumen/{{ $konsumens->id }}" class="btn btn-warning"
                                            data-mdc-auto-init="MDCRipple">
                                            Edit
                                        </a>
                                        <a href="/delKonsumen/{{ $konsumens->id }}" class="btn btn-danger"
                                            data-mdc-auto-init="MDCRipple">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="assets/vendor/chartist/js/chartist.min.js"></script>
<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
@include('layout/footer')
@endsection