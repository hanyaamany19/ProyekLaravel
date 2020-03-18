@extends('layouts.app')

@section('content')
		<h1>Detail Data Buku</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-lg-12">

			        <form action="/buku/{{$buku->id}}/update" method="POST">
		        		{{csrf_field()}}
					  <div class="form-group">
					    <label class="control-label">Nama Buku</label>
					    <input name="nama_buku" disabled="disabled" type="text" class="form-control"placeholder="Masukkan nama buku" value="{{$buku->nama_buku}}">
					  </div>

					  <div class="form-group">
					    <label class="control-label">Penerbit Buku</label>
					    <input name="penerbit_buku" disabled="disabled" type="text" class="form-control"placeholder="Masukkan penerbit buku" value="{{$buku->penerbit_buku}}">
					  </div>
					  <div class="form-group">
					    <label class="control-label">Stok Buku</label>
					    <input name="stok_buku" disabled="disabled" type="text"class="form-control"placeholder="Masukkan stok buku" value="{{$buku->stok_buku}}">
					  </div>
					  <div class="form-group">
					    <label>Harga Buku</label>
					    <input type="text" name="harga_buku" disabled="disabled" class="form-control" placeholder="Masukkan harga buku">{{$buku->harga_buku}}</input>
					</div>
			        </form>
			    	</div>
			      </div>
			  	</div>
				</div>
</table>
@endsection