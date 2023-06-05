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
                            <h3>Create Data TRANSAKSI PELANGGAN</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <form action="/updateTransaksi_pelanggan/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ID Transaksi Pelanggan</label>
                                        <br>
                                        <input type="string" name="id_transaksi_pelanggan" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->id_transaksi_pelanggan }}">
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
                                        <label for="exampleInputEmail1" class="form-label">ID Barang</label>
                                        <div class="form-group">
                                        <select class="form-control" name="id_barang">
                                            <option selected disabled>-- ID Barang --</option>
                                            @foreach ($barang as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_barang }}-{{ $row->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">ID Jenis Transaksi</label>
                                        <div class="form-group">
                                        <select class="form-control" name="id_jenis_transaksi">
                                            <option selected disabled>-- ID Jenis Transaksi --</option>
                                            @foreach ($jenis_transaksi as $row)
                                                <option value="{{ $row->id }}">
                                                    {{ $row->id_jenis_transaksi }}-{{ $row->nama_transaksi }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                                        <br>
                                        <input type="string" name="jumlah_barang" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->jumlah_barang}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                        <br>
                                        <input type="string" name="tanggal_transaksi_pelanggan" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->tanggal_transaksi_pelanggan}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Total Harga</label>
                                        <br>
                                        <input type="string" name="total_harga_pelanggan" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->total_harga_pelanggan}}">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/Transaksi_pelanggan" class="btn btn-danger">Cancel</a>
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
