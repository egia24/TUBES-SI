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
                        <h3>Create Data Pegawai</h3>
                    </div>
                    <div class="panel-body">
                        <div class="card-body">
                            <form action="/updatePegawai/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id Pegawai</label>
                                    <br>
                                    <input type="string" name="id_pegawai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->id_pegawai}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username Pegawai</label>
                                    <br>
                                    <input type="string" name="username_pegawai" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->username_pegawai }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password Pegawai</label>
                                    <br>
                                    <input type="string" name="password_pegawai" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->password_pegawai }}">
                                </div><br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/Pegawai" class="btn btn-danger">Cancel</a>
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