@extends('layout.app')
@section('title','Form Jenis_transakasi')
@section('content')
<form
    action="/instJenis_transaksi" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Jenis Transaksi</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_jenis_transaksi" name="id_jenis_transaksi" class="form-control" placeholder="ID jenis transaksi" value="{{ isset($jenis_transaksi) ? $jenis_transakasi->id_jenis_transaksi : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_transaksi" name="nama_transaksi" class="form-control" placeholder="Nama transaksi" value="{{ isset($jenis_transaksi) ? $jenis_transaksi->nama_transaksi : ''}}">
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