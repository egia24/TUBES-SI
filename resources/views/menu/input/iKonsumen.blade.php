@extends('layout.app')
@section('title','Form Konsumen')
@section('content')
<form
    action="/instKonsumen" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Konsumen</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_konsumen" name="id_konsumen" class="form-control" placeholder="ID konsumen" value="{{ isset($konsumen) ? $konsumen->id_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control" placeholder="Nama konsumen" value="{{ isset($konsumen) ? $konsumen->nama_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="telepon_konsumen" name="telepon_konsumen" class="form-control" placeholder="Telepon konsumen" value="{{ isset($konsumen) ? $konsumen->telepon_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email_konsumen" name="email_konsumen" class="form-control"placeholder="Email konsumen" value="{{ isset($konsumen) ? $konsumen->email_konsumen : ''}}">
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