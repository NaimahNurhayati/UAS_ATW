@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 600px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Data User</h3>
		<div class="card-header">
			<a href="{{url('user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<th>No</th>
					<th>Aksi</th>
					<th>Username</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Produk</th>
					<th>Email</th>
				</thead>
				<tbody>
					@foreach($list_user as $user)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<div class="btn-group" style="display: flex;">
								<a href="{{url('user', $user->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
								<a href="{{url('user', $user->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
								@include('templateadmin.utils.delete', ['url' => url('user', $user->id)])
							</div>
						</td>
						<td>{{$user->username}}</td>
						<td>{{$user->nama}}</td>
						<td>{{$user->jenis_kelamin_string}}</td>
						<td>{{$user->produk_count}}</td>
						<td>{{$user->email}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>


	</div>
</div>

@endsection