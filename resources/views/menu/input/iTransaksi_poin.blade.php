@extends('layout.app')
@section('title','Form Pelanggan')
@section('content')
<form
    action="/instTransaksi_poin" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Transaksi Poin</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_transaksi_poin" name="id_transaksi_poin" class="form-control" placeholder="ID transaksi poin" value="{{ isset($transaksi_poin) ? $transaksi_poin->id_transaksi_poin: ''}}">
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
                                    <select class="form-control" name="id_poin">
                                        <option selected disabled>-- ID Poin --</option>
                                        @foreach ($poin as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_poin}}-{{ $row->nama_poin }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tanggal_transaksi_poin" name="tanggal_transaksi_poin" class="form-control" placeholder="Tanggal" value="{{ isset($transaksi_poin) ? $transaksi_poin->tanggal_transaksi_poin: ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="jumlah_poin" name="jumlah_poin" class="form-control" placeholder="Jumlah poin" value="{{ isset($transaksi_poin) ? $transaksi_poin->jumlah_poin : ''}}">
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