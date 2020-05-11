@extends('template.default')
@section('breadcrumb')
{{ Breadcrumbs::render('profile') }}
@endsection
@section('content')
@include('sweetalert::alert')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Profil Toko</h3> 
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Nama Toko</th>
              <th>Alamat Toko</th>
              <th>Kota Toko</th>
              <th>Telepon</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->address }}</td>
                <td>{{ $profile->city }}</td>
                <td>{{ $profile->phone }}</td>
                <td>
                <a href="{{ route('profile.edit', $profile)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection
