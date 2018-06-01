@extends('layouts.app')
@section('content');
<div class="container">
  <div class="col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Data Pengirim Barang</div>
      <div class="panel-body">
        <form action="{{ route('pengirim.update',$senders) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="form-group">
              <label for="">Nama </label>
              <input type="text" class="form-control" name="nama_pengirim" value="<?=$senders->nama_pengirim?>" placeholder="Masukan Nama Anda" >
          </div>
          <div class="form-group">
              <label for="">Phone </label>
              <input type="number" class="form-control" name="tlp_pengirim" value="<?=$senders->tlp_pengirim?>" placeholder="Masukan Nomer Telepon Anda">
          </div>
          <div class="form-group">
            <label for="">Email </label>
            <input type="text" class="form-control" name="email_pengirim" value="<?=$senders->email_pengirim?>" placeholder="Masukan Email Anda">
          </div>
          <div class="form-group">
             <label for="">Alamat </label>
             <input type="text" class="form-control" name="alamat_pengirim" value="<?=$senders->alamat_pengirim?>"  placeholder="Masukan Alamat Anda">
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