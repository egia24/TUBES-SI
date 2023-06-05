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
                        <h3>Create Data Konsumen</h3>
                    </div>
                    <div class="panel-body">
                        <div class="card-body">
                            <form action="/updateKonsumen/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Id Konsumen</label>
                                    <br>
                                    <input type="string" name="id_konsumen" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ $data->id_konsumen }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Konsumen</label>
                                    <br>
                                    <input type="string" name="nama_konsumen" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->nama_konsumen }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">telepon_konsumen</label>
                                    <br>
                                    <input type="string" name="telepon_konsumen" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->telepon_konsumen }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Konsumen</label>
                                    <br>
                                    <input type="string" name="email_konsumen" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ $data->email_konsumen }}">
                                </div><br>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="/Konsumen" class="btn btn-danger">Cancel</a>
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