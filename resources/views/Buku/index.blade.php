@extends('layouts.app')

@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		
		@endif
		<br>
		<br>
		<div class="row">
			<div class="col-6">
				<h1>Data Buku</h1>
			</div>

				<div class="col-6">
					<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data
					</button>
				</div>
		
		<table class="table table-hover table-striped">
	<tr style="text-align: center;">
		<th>NAMA BUKU</th>
		<th>PENERBIT BUKU</th>
		<th>STOK BUKU</th>
		<th>HARGA BUKU</th>
		<th>AKSI</th>
	</tr>
	@foreach($data_buku as $buku)
	<tr style="text-align: center;">
		<td>{{$buku->nama_buku}}</td>
		<td>{{$buku->penerbit_buku}}</td>
		<td>{{$buku->stok_buku}}</td>
		<td>{{$buku->harga_buku}}</td>
		<td>
			<a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin data ini ingin dihapus ?')">Hapus</a>
			<a href="/buku/{{$buku->id}}/detail" class="btn btn-info btn-sm">Detail</a>
		</td>
	</tr>
	@endforeach
</table>
</div>
			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>

			      <div class="modal-body">
			        <form action="/buku/create" method="POST">
		        		{{csrf_field()}}
					  <div class="form-group">
					    <label>Nama Buku</label>
					    <input name="nama_depan" type="text" class="form-control" placeholder="Masukkan nama buku">
					  </div>

					  <div class="form-group">
					    <label>Penerbit Buku</label>
					    <input name="penerbit_buku" type="text" class="form-control"placeholder="Masukkan penerbit buku">
					  </div>

					  <div class="form-group">
					    <label>Stok Buku</label>
					    <input name="stok_buku" type="text" class="form-control"placeholder="Masukkan stok buku">
					  </div>

					  <div class="form-group">
					    <label>Harga Buku</label>
					    <input name="harga_buku" type="text" class="form-control" placeholder="Masukkan harga buku"></input>
					  </div>
					

					</div>
			      	<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-info">Submit</button>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
@endsection
