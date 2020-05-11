@extends('template.default')
@section('breadcrumb')
{{ Breadcrumbs::render('profile.edit', $profile) }}
@endsection
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Edit Profil Toko</h3>
            </div>
            <form role="form" action="{{ route('profile.update', $profile)}}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group {{ $errors->has('name') ? 'invalid' : '' }}">
                    <label>Nama Toko</label>
                    <input type="text" class="form-control" name="name" value="{{ $profile->name ?? old('name')}}" placeholder="Masukkan Nama Toko">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        {{ $errors->first('name') }}
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('address') ? 'invalid' : '' }}">
                    <label>Alamat Toko</label>
                    <input type="text" class="form-control" name="address" value="{{ $profile->address ?? old('address')}}" placeholder="Masukkan Alamat Toko">
                    @if ($errors->has('address'))
                    <span class="help-block">
                        {{ $errors->first('address') }}
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('city') ? 'invalid' : '' }}">
                    <label>Kota Toko</label>
                    <input type="text" class="form-control" name="city" value="{{ $profile->city ?? old('city')}}" placeholder="Masukkan Kota Toko">
                    @if ($errors->has('city'))
                    <span class="help-block">
                        {{ $errors->first('city') }}
                    </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('phone') ? 'invalid' : '' }}">
                    <label>Telp Toko</label>
                    <input type="text" class="form-control" name="phone" value="{{ $profile->phone ?? old('phone')}}" placeholder="Masukkan Telepon Toko">
                    @if ($errors->has('phone'))
                    <span class="help-block">
                        {{ $errors->first('phone') }}
                    </span>
                    @endif
                </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
</div>
@endsection