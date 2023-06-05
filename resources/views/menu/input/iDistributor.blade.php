@extends('layout.app')
@section('title','Form Konsumen')
@section('content')
<form
    action="/instDistributor" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Distributor</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_distributor" name="id_distributor" class="form-control" placeholder="ID distributor" value="{{ isset($distributor) ? $distributor->id_distributor : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_distributor" name="nama_distributor" class="form-control" placeholder="Nama distributor" value="{{ isset($distributor) ? $distributor->nama_distributor : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="telepon_distributor" name="telepon_distributor" class="form-control" placeholder="Telepon distributor" value="{{ isset($distributor) ? $distributor->telepon_distributor : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email_distributor" name="email_distributor" class="form-control"placeholder="Email distributor" value="{{ isset($distributor) ? $distributor->email_distributor : ''}}">
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