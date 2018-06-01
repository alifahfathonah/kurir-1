@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Tambah Kurir Baru</div>
          <div class="panel-body">
            <form action="{{ url('/kurir/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nama </label>
                  <input type="text" class="form-control" name="nama_kurir" placeholder="Masukan Nama Anda">
                </div>
                <div class="form-group">
                    <label for="">Phone </label>
                    <input type="number" class="form-control" name="tlp_kurir" placeholder="Masukan Nomer Telepon Anda">
                </div>
                <div class="form-group">
                    <label for="">Email </label>
                    <input type="text" class="form-control" name="email_kurir" placeholder="Masukan Email Anda">
                </div>
                <div class="form-group">
                    <label for="">Alamat </label>
                    <input type="text" class="form-control" name="alamat_kurir" placeholder="Masukan Alamat Anda">
                </div>
                <div class="form-group">
                  <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection()