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
                            <h3>Create Data Distributor</h3>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <form action="/updateDistributor/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Id Distributor</label>
                                        <br>
                                        <input type="string" name="id_distributor" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->id_distributor }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Distributor</label>
                                        <br>
                                        <input type="string" name="nama_distributor" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->nama_distributor }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Telepon Distributor</label>
                                        <br>
                                        <input type="string" name="telepon_distributor" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->telepon_distributor }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Distributor</label>
                                        <br>
                                        <input type="string" name="email_distributor" class="form-control"
                                            id="exampleInputEmail1" aria-describedby="emailHelp"
                                            value="{{ $data->email_distributor }}">
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/Distributor" class="btn btn-danger">Cancel</a>
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
