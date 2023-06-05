@extends('layout.app')
@section('title','Form Konsumen')
@section('content')
<form
    action="/instPegawai" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Pegawai</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_pegawai" name="id_pegawai" class="form-control" placeholder="ID pegawai" value="{{ isset($pegawai) ? $pegawai->id_pegawai : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="username_pegawai" name="username_pegawai" class="form-control" placeholder="Username pegawai" value="{{ isset($pegawai) ? $pegawai->username_pegawai : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="password_pegawai" name="password_pegawai" class="form-control" placeholder="Password pegawai" value="{{ isset($pegawai) ? $pegawai->password_pegawai : ''}}">
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