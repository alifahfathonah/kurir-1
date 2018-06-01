@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Data Lokasi Barang</div>
      <div class="panel-body">
        <form action="{{ route('lokasi.update',$trackings) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
              <label for="">Nomor RESI </label>
              <input type="text" class="form-control" name="id_pengiriman" value="<?=$trackings->id_pengiriman?>" placeholder="Masukan Nomor Resi" >
          </div>
          <div class="form-group">
              <label for="">Alamat </label>
              <input type="text" class="form-control" name="alamat" value="<?=$trackings->alamat?>" placeholder="Masukan Alamat Barang">
          </div>
          <div class="form-group">
            <label for="">Kota </label>
            <input type="text" class="form-control" name="kota" value="<?=$trackings->kota?>" placeholder="Masukan Kota Sementara">
          </div>
          <div class="form-group">
             <label for="">Keterangan </label>
             <input type="text" class="form-control" name="keterangan" value="<?=$trackings->keterangan?>"  placeholder="Masukan Keterangan Barang">
          </div>
          <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection();