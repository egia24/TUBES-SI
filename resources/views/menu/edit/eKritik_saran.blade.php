@section('content')
@include('layout/navbar')
@include('layout/sidebar')
@extends('layout/app')
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
                            <form action="/updateKritik_saran/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ID Kritik & Saran</label>
                                    <br>
                                    <input type="string" name="id_kritik_saran" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->id_kritik_saran}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">ID Pelanggan</label>
                                    <div class="form-group">
                                        <select class="form-control" name="id_pelanggan">
                                            <option selected disabled>-- ID Pelanggan --</option>
                                            @foreach ($pelanggan as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_pelanggan }}-{{ $row->nama_pelanggan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Isi</label>
                                    <br>
                                    <input type="string" name="isi_kritik_saran" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->isi_kritik_saran}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <br>
                                    <input type="string" name="tanggal_kritik_saran" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->tanggal_kritik_saran}}">
                                </div><br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/Kritik_saran" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout/footer')
@endsection