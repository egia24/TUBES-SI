@extends('layout.app')
@section('title','Form Pelanggan')
@section('content')
<form
    action="/instTransaksi_konsumen" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Transaksi Konsumen</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_transaksi_konsumen" name="id_transaksi_konsumen" class="form-control" placeholder="ID transaksi konsumen" value="{{ isset($transaksi_konsumen) ? $transaksi_konsumen->id_transaksi_konsumen: ''}}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="id_konsumen">
                                        <option selected disabled>-- ID Konsumen --</option>
                                        @foreach ($konsumen as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_konsumen }}-{{ $row->nama_konsumen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="id_barang">
                                        <option selected disabled>-- ID Barang --</option>
                                        @foreach ($barang as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_barang }}-{{ $row->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="id_jenis_transaksi">
                                        <option selected disabled>-- ID Jenis Transaksi --</option>
                                        @foreach ($jenis_transaksi as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_jenis_transaksi }}-{{ $row->nama_transaksi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" placeholder="ID jumlah barang" value="{{ isset($transaksi_konsumen) ? $transaksi_konsumen->jumlah_barang : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tanggal_transaksi_konsumen" name="tanggal_transaksi_konsumen" class="form-control" placeholder="Tanggal" value="{{ isset($transaksi_konsumen) ? $transaksi_konsumen->tanggal_transaksi_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="total_harga_konsumen" name="total_harga_konsumen" class="form-control" placeholder="Total Harga" value="{{ isset($transaksi_konsumen) ? $transaksi_konsumen->total_harga_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection