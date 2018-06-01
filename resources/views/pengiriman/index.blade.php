@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/pengiriman/create') }}" class="btn btn-primary btn-sm">Tambah Data Pengiriman Barang <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>NO RESI</th>
              <th>Nama Pengirim</th>
              <th>Deskripsi Barang</th>
              <th>Tanggal Kirim</th>
              <th>Agen Kurir</th>
           <!--    <th>Keterangan Barang</th> -->
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($deliveries as $pengiriman)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $resi++ }}</td>
              <td>{{ $pengiriman->id_pengirim }}</td>
              <td>{{ $pengiriman->desk_barang }}</td>
              <td>{{ $pengiriman->tgl_kirim }}</td>
              <td>{{ $pengiriman->id_kurir }}</td>
              <!-- <td>{{ $pengiriman->id_tracking }}</td> -->
              <td width="20%">
                <a href="{{ route('pengiriman.edit', $pengiriman) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('pengiriman.destroy',$pengiriman) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;" onclick=return)>Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection()