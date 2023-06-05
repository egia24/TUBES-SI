@extends('layout.app')
@section('title','Form Pelanggan')
@section('content')
<form
    action="/instTransaksi_pelanggan" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Transaksi Pelanggan</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_transaksi_pelanggan" name="id_transaksi_pelanggan" class="form-control" placeholder="ID transaksi konsumen" value="{{ isset($transaksi_pelanggan) ? $transaksi_pelanggan->id_transaksi_pelanggan: ''}}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="id_pelanggan">
                                        <option selected disabled>-- ID Pelanggan --</option>
                                        @foreach ($pelanggan as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_pelanggan }}-{{ $row->nama_pelanggan }}</option>
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
                                    <input type="text" id="jumlah_barang" name="jumlah_barang" class="form-control" placeholder="Jumlah barang" value="{{ isset($transaksi_pelanggan) ? $transaksi_pelanggan->jumlah_barang : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tanggal_transaksi_pelanggan" name="tanggal_transaksi_pelanggan" class="form-control" placeholder="Tanggal" value="{{ isset($transaksi_pelanggan) ? $transaksi_pelanggan->tanggal_transaksi_pelanggan : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="total_harga_pelanggan" name="total_harga_pelanggan" class="form-control" placeholder="Total Harga" value="{{ isset($transaksi_pelanggan) ? $transaksi_pelanggan->total_harga_pelanggan : ''}}">
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