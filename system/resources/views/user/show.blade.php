@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<p>Detail Data User</p>

		<hr>
		<div class="card-body">
			<p>{{$user->nama}}</p>
			<p>
				{{"@".$user->username}} |
				Email : {{$user->email}}
			</p>
			<br>
			<p> Nomor Handphone : {{$user->detail->no_handphone}}</p>
		</div>
	</div>
</div>

@endsection