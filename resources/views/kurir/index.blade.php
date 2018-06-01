@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <a href="{{ url('/kurir/create') }}" class="btn btn-primary btn-sm">Tambah Kurir Baru <i class="fa fa-plus"></i></a>
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
            @foreach($couriers as $kurir)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $kurir->nama_kurir }}</td>
              <td>{{ $kurir->tlp_kurir }}</td>
              <td>{{ $kurir->email_kurir }}</td>
              <td>{{ $kurir->alamat_kurir }}</td>
              <td width="20%">
                <a href="{{ route('kurir.edit', $kurir) }}" class="btn btn-info btn-sm" style="float:left;">Update</a>
                <form action="{{ route('kurir.destroy',$kurir) }}" method="post">
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