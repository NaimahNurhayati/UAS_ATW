@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Tambah Data Promo</h3>
	</div>
	<form action="{{url('promo')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="" class="control-label"> Jumlah</label>
						<input type="text" class="form-control" name="jumlah">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Harga Awal</label>
						<input type="text" class="form-control" name="harga_awal">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Harga Promo</label>
						<input type="text" class="form-control" name="harga_promo">
					</div>
				</div>
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