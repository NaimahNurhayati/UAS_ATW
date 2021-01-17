@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 600px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Daftar Promo</h3>
		<div class="card-header">
			<a href="{{url('promo/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<th>No</th>
					<th>Aksi</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Harga Awal</th>
					<th>Harga Promo</th>
					<th>Deskripsi</th>
				</thead>
				<tbody>
					@foreach($list_promo as $promo)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<div class="btn-group" style="display: flex;">
								<a href="{{url('promo', $promo->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
								<a href="{{url('promo', $promo->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
								@include('templateadmin.utils.delete', ['url' => url('promo', $promo->id)])
							</div>
						</td>
						<td>{{$promo->nama}}</td>
						<td>{{$promo->jumlah}}</td>
						<td>{{$promo->harga_awal}}</td>
						<td>{{$promo->harga_promo}}</td>
						<td>{{$promo->deskripsi}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>


	</div>
</div>

@endsection