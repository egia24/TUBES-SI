@extends('layout.app')
@section('title','Form Pelanggan')
@section('content')
<form
    action="/instPelanggan" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Pelanggan</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_pelanggan" name="id_pelanggan" class="form-control" placeholder="ID pelanggan" value="{{ isset($pelanggan) ? $pelanggan->id_pelanggan : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_pelanggan" name="nama_pelanggan" class="form-control" placeholder="Nama pelanggan" value="{{ isset($pelanggan) ? $pelanggan->nama_pelanggan : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="telepon_pelanggan" name="telepon_pelanggan" class="form-control" placeholder="Telepon pelanggan" value="{{ isset($pelanggan) ? $pelanggan->telepon_pelanggan : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email_pelanggan" name="email_pelanggan" class="form-control"placeholder="Email pelanggan" value="{{ isset($pelanggan) ? $pelanggan->email_pelanggan : ''}}">
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