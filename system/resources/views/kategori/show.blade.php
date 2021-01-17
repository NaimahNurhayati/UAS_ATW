@extends('templateadmin.admin')

@section('content')

<div class="product-status mg-tb-15" style="height: 430px">
  <div class="container-fluid">
    <h3 style="text-align: center;">Detail Data Kategori Produk</h3>
  </div>
  <div class="card-body">
    <h3>Kategori {{$kategori->nama_kategori}}</h3>
    Seller :{{$kategori->seller->nama}}
    <hr>

    <p>
      Terdiri Atas: <br>
      {!! nl2br($kategori->deskripsi)!!}
    </p>
  </div>
</div>

@endsection