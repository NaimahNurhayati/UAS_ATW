@extends('template.base')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Tambah Data Produk</h3>
	</div>
	<form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="" class="control-label"> Harga</label>
						<input type="text" class="form-control" name="harga">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Berat</label>
						<input type="text" class="form-control" name="berat">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="" class="control-label"> Stok</label>
						<input type="text" class="form-control" name="stok">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label"> Size</label>
						<input type="text" class="form-control" name="size">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label"> Color</label>
						<input type="text" class="form-control" name="color">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="" class="control-label"> Foto</label>
						<input type="file" class="form-control" name="foto" accept=".jpg">
					</div>
				</div>
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Deskripsi</label>
				<textarea name="deskripsi" class="form-control" id="deskripsi">
			</textarea>

			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

	</form>
</div>
</div>

@endsection

@push('style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
	$(document).ready(function() {
		$('#summernote').summernote();
	});
</script>
@endpush