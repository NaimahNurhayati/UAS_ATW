@extends('template.base')

@section('content')
<div class="container-fluid">
	<h3 style="text-align: center;">Edit Data Produk</h3>
</div>
<form action="{{url('produk', $produk->id)}}" method="post" enctype="multipart/form-data">
	@csrf
	@method("PUT")
	<div class="card-body">
		<div class="form-group">
			<label for="" class="control-label"> Nama</label>
			<input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label"> Harga</label>
					<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label"> Berat</label>
					<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label for="" class="control-label"> Stok</label>
					<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="" class="control-label"> Size</label>
					<input type="text" class="form-control" name="size" value="{{$produk->size}}">
				</div>
			</div>
			<div class=" col-md-6">
				<div class="form-group">
					<label for="" class="control-label"> Color</label>
					<input type="text" class="form-control" name="color" value="{{$produk->color}}">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="">
					<label for="" class="control-label"> Foto</label>
					<input type="file" class="form-control" name="foto" accept=".jpg">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					Gambar produk:
					<img style="width: 220px" src="{{url("public/$produk->foto")}}" alt="">
				</div>
			</div>
			<div class=" form-group">
				<label for="" class="control-label"> Deskripsi</label>
				<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>

			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

</form>
</div>

@endsection