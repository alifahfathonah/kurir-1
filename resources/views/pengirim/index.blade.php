@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/pengirim/create') }}" class="btn btn-primary btn-sm">Tambah Pengirim Barang <i class="fa fa-plus"></i></a>
        <h1></h1>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($senders as $pengirim)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $pengirim->nama_pengirim }}</td>
              <td>{{ $pengirim->tlp_pengirim }}</td>
              <td>{{ $pengirim->email_pengirim }}</td>
              <td>{{ $pengirim->alamat_pengirim }}</td>
              <td width="20%">
                <a href="{{ route('pengirim.edit', $pengirim) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('pengirim.destroy',$pengirim) }}" method="post">
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