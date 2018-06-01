@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">Tambah Data Lokasi Baru</div>
          <div class="panel-body">
            <form action="{{ url('/lokasi/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Nomor RESI </label>
                  <input type="text" class="form-control" name="id_pengiriman" placeholder="Masukan Nomor Resi Barang">
                </div>
                <div class="form-group">
                    <label for="">Alamat </label>
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Barang">
                </div>
                <div class="form-group">
                    <label for="">Kota </label>
                    <input type="text" class="form-control" name="kota" placeholder="Masukan Kota Sementara">
                </div>
                <div class="form-group">
                    <label for="">Keterangan </label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan Barang">
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