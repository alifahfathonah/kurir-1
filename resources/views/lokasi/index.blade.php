@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/lokasi/create') }}" class="btn btn-primary btn-sm">Tracking Barang <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>NOMOR RESI</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($trackings as $lokasi)
            <tr>

              <td>{{ $no++ }}</td>
              <td>{{ $resi++ }}</td>
              <td>{{ $lokasi->id_pengiriman }}</td>
              <td>{{ $lokasi->alamat }}</td>
              <td>{{ $lokasi->kota }}</td>
              <td>{{ $lokasi->keterangan }}</td>
              <td width="20%">
                <a href="{{ route('lokasi.edit', $lokasi) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('lokasi.destroy',$lokasi) }}" method="post">
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