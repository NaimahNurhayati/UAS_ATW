@extends('templateadmin.admin')

@section('content')
<h2 style="text-align: center;">Halaman Kategori</h2> <br><br>
<div class="image" style="display: flex; justify-content:space-evenly">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p0.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Tas</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p18.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Flat Shoes</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p16.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Sepatu</h3>
    </a>
  </div>
</div>

<div class="image" style="display: flex; justify-content:space-evenly; margin-top:20px;">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/13.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Gamis</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/11.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Jam Tangan</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:200px;" src="{{url('public')}}/assets/images/products/22.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Perhiasan</h3>
    </a>
  </div>
</div>

<div class="image" style="display: flex; justify-content:space-evenly; margin-top:20px;">
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/12.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Kosmetik</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/10.jpg" alt="" class="hover-image">
    <a href="">
      <h3 style="text-align: center;">Jaket</h3>
    </a>
  </div>
  <div>
    <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/00.jpg" alt="">
    <a href="">
      <h3 style="text-align: center;">Aksesoris</h3>
    </a>
  </div>

</div>


<div class="product-status mg-tb-15" style="height: 600px">
  <div class="container-fluid">
    <h3 style="text-align: center;">Daftar Produk</h3>
    <div class="card-header">
      <a href="{{url('kategori/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>Tambah Data</a>
    </div>

    <div class="card-body">
      <table class="table">
        <thead>
          <th>No</th>
          <th>Aksi</th>
          <th>Nama</th>
        </thead>
        <tbody>
          @foreach($list_kategori as $kategori)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>
              <div class="btn-group" style="display: flex;">
                <a href="{{url('kategori', $kategori->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a>
                <a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                @include('templateadmin.utils.delete', ['url' => url('kategori', $kategori->id)])
              </div>
            </td>
            <td>{{$kategori->nama_kategori}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection