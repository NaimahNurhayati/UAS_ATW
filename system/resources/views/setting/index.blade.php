@extends('templateadmin.admin')

@section('content')
<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Ganti Password</h3>
	</div>
	Email : {{$user->email}}
	<form action="{{url('setting')}}" method="post">
		@csrf
		<div class="card-body">
			<div class="form-group">
				<label for="" class="control-label"> Current Password</label>
				<input type="password" class="form-control" name="current">
			</div>
			<div class="form-group">
				<label for="" class="control-label"> New Password</label>
				<input type="password" class="form-control" name="new">
			</div>
			<div class="form-group">
				<label for="" class="control-label"> Confirm New Password</label>
				<input type="password" class="form-control" name="confirm">
			</div>
			<button class="btn btn-primary"> <i class="fa fa-save"></i>Save</button>

	</form>
</div>
</div>

@endsection