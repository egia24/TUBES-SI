@extends('layout.app')
@section('title','Form Konsumen')
@section('content')
<form
    action="/instKritik_saran" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Kritik & Saran</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_kritik_saran" name="id_kritik_saran" class="form-control" placeholder="ID kritik saran" value="{{ isset($kritik_saran) ? $kritik_saran->id_kritik_saran : ''}}">
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
                                    <input type="text" id="isi_kritik_saran" name="isi_kritik_saran" class="form-control" placeholder="Isi" value="{{ isset($konsumen) ? $konsumen->telepon_konsumen : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tanggal_kritik_saran" name="tanggal_kritik_saran" class="form-control"placeholder="Tanggal" value="{{ isset($konsumen) ? $konsumen->email_konsumen : ''}}">
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