@extends('layout.app')
@section('title','Form Konsumen')
@section('content')
<form
    action="/instBarang" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3>Create Data Barang</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" id="id_barang" name="id_barang" class="form-control" placeholder="ID barang" value="{{ isset($barang) ? $barang->id_barang : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama barang" value="{{ isset($barang) ? $barang->nama_barang : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="harga_barang" name="harga_barang" class="form-control" placeholder="Harga barang" value="{{ isset($barang) ? $barang->harga_barang : ''}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" id="stok" name="stok" class="form-control"placeholder="Stok" value="{{ isset($barang) ? $barang->stok : ''}}">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="id_distributor">
                                        <option selected disabled>-- ID Distributor --</option>
                                        @foreach ($distributor as $row)
                                            <option value="{{ $row->id }}">
                                                {{ $row->id_distributor }}-{{ $row->nama_distributor }}</option>
                                        @endforeach
                                    </select>
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