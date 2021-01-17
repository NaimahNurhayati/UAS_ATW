@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Tambah Data Kategori</h3>
	</div>
	<form action="{{url('kategori')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama_kategori">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Deskripsi</label>
				<textarea name="deskripsi" class="form-control"></textarea>

			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

	</form>
</div>
</div>

@endsection