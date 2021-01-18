@extends('template.base')

@section('content')

<div class="product-status mg-tb-15">

	<div class="card">
		<div class="card-header">
			Filter
		</div>
		<div class="card-body">
			<form action="{{url('produk/filter')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="" class="control-label">Nama</label>
					<input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Stok</label>
					<input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Harga Min</label>
							<input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Harga Max</label>
							<input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
						</div>
					</div>
				</div>

				<button class="btn btn-primary float-right"><i class="fa fa-search"></i>Filter</button>
			</form>
		</div>
	</div>

	<div class="container-fluid">
		<h3 style="text-align: center;">Daftar Produk</h3>
		<div class="card-header">
			<a href="{{url('produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
		</div>
		<div class="card-body table_datatable">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<th>No</th>
					<th>Aksi</th>
					<th>Nama</th>
					<th>Harga</th>
					<th>Stok</th>
				</thead>
				<tbody>
					@foreach($list_produk as $produk)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<div class="btn-group" style="display: flex;">
								<a href="{{url('produk', $produk->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
								<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
								@include('templateadmin.utils.delete', ['url' => url('produk', $produk->id)])
							</div>
						</td>
						<td>{{$produk->nama}}</td>
						<td>{{$produk->harga}}</td>
						<td>{{$produk->stok}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>


	</div>
</div>

@endsection