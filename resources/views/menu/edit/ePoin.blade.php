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
                            <h3>Create Data Poin</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <form action="/updatePoin/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id Poin</label>
                                        <br>
                                        <input type="string" name="id_poin" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->id_poin }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Poin</label>
                                        <br>
                                        <input type="string" name="nama_poin" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->nama_poin }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nilai Poin</label>
                                        <br>
                                        <input type="string" name="nilai_poin" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->nilai_poin }}">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/Poin" class="btn btn-danger">Cancel</a>
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
