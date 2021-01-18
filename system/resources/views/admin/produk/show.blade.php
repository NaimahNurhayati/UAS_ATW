@extends('template.opra')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
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
      </div>
    </div>
  </div>
</div>
</div>
@endsection