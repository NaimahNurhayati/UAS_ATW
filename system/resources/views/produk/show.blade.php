@extends('template.base')

@section('content')

<div class="container-fluid">
	<h3 style="text-align: center;">Detail Data Produk</h3>
</div>
<br>
<div class="card-body">
	<h4>{{$produk->nama}}</h4>
	<hr>
	<p>
		@include('produk.show.detail')
	</p>
	<hr>
	<p>
		Deskripsi Produk: {!! nl2br($produk->deskripsi)!!}
	</p>
</div>

</form>
</div>

@endsection