@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Edit Data Promo</h3>
	</div>
	<form action="{{url('promo', $promo->id)}}" method="post">
		@csrf
		@method("PUT")
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama" value="{{$promo->nama}}">
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="" class="control-label"> Jumlah</label>
						<input type="text" class="form-control" name="jumlah" value="{{$promo->jumlah}}">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Harga Awal</label>
						<input type="text" class="form-control" name="harga_awal" value="{{$promo->harga_awal}}">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Harga Promo</label>
						<input type="text" class="form-control" name="harga_promo" value="{{$promo->harga_promo}}">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="" class="control-label"> Deskripsi</label>
				<textarea name="deskripsi" class="form-control">{{$promo->deskripsi}}</textarea>

			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

	</form>
</div>
</div>

@endsection