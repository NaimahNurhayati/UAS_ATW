@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Edit Data Kategori Produk</h3>
	</div>
	<form action="{{url('kategori', $kategori->id)}}" method="post">
		@csrf
		@method("PUT")
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Deskripsi</label>
				<textarea name="deskripsi" class="form-control">{{$kategori->deskripsi}}</textarea>

			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>
</div>
	</form>
</div>

@endsection