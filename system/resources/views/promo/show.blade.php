@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
	<div class="container-fluid">
		<h3 style="text-align: center;">Detail Data Promo</h3>
	</div>
	<div class="card-body">
		<h3>{{$promo->nama}}</h3>
		<hr size="10">
		<p>
			Jumlah Promo Rp. {{number_format($promo->jumlah)}}
		</p>
		<br>
		<p>
			{!! nl2br($promo->deskripsi)!!}
		</p>
	</div>

	</form>
</div>
</div>

@endsection