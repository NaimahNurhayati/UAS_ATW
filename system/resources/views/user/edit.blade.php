@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Edit Data User</h3>
	</div>
	<form action="{{url('user', $user->id)}}" method="post">
		@csrf
		@method("PUT")
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Nama</label>
				<input type="text" class="form-control" name="nama" value="{{$user->nama}}">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Username</label>
				<input type="text" class="form-control" name="username" value="{{$user->username}}">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Email</label>
				<input type="email" class="form-control" name="email" value="{{$user->email}}">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> Password</label>
				<input type="password" class="form-control" name="password">
			</div>

			<div class="form-group">
				<label for="" class="control-label"> No Hp</label>
				<input type="text" class="form-control" name="no_handphone" value="{{$user->no_handphone}}">
			</div>
		</div>

		<button class="btn btn-primary"> <i class="fa fa-save"></i>Simpan</button>

	</form>
</div>
</div>

@endsection