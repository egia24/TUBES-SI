@extends('layout.app')
@section('title','Form Pelanggan')
@section('content')
<form
    action="/instPoin" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Poin</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_poin" name="id_poin" class="form-control" placeholder="ID poin" value="{{ isset($poin) ? $poin->id_poin : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_poin" name="nama_poin" class="form-control" placeholder="Nama poin" value="{{ isset($poin) ? $poin->nama_poin: ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nilai_poin" name="nilai_poin" class="form-control" placeholder="Nilai poin" value="{{ isset($poin) ? $poin->nilai_poin : ''}}">
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