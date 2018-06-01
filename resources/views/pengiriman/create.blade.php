@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Tambah Data Pengiriman Baru</div>
          <div class="panel-body">
            <form action="{{ url('/pengiriman/create') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <label>Nama Pengirim</label>
                  <select name="id_pengirim" class="form-control">
                    <?php foreach($pengirim as $p):?>
                    <option value="<?=$p->id?>">
                      <?=$p->nama_pengirim?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Barang </label>
                    <input type="text" class="form-control" name="desk_barang" placeholder="Masukan Deskripsi Barang">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Kirim </label>
                    <input type="text" class="form-control" name="tgl_kirim" placeholder="Masukan Tanggal Pengiriman">
                </div>
                <div class="form-group">
                    <label for="">Nama Kurir </label>
                    <select name="id_kurir" class="form-control">
                    <?php foreach($kurir as $k):?>
                    <option value="<?=$k->id?>">
                      <?=$k->nama_kurir?>
                    </option>
                    <?php endforeach ?>
                  </select>
                </div>
<!--                  <div class="form-group">
                    <label for="">Keterangan Lokasi Barang </label>
                    <input type="text" class="form-control" name="id_tracking" placeholder="Masukan Keterangan Lokasi Anda">
                </div> -->
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