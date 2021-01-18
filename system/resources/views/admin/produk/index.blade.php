@extends('template.opra')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          Data Lengkap Pondok Pesantren
          <a href="{{url('admin/produk/create')}}" class="float-right"><i class="fa fa-plus fa-xs" style="color: dodgerblue;"></i></a>
        </div>
        <div class="card-body table_datatable">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list_produk as $produk)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                  <div class="btn-group" style="display: flex;">
                    <a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a>
                    @include('template.utils.delete', ['url' => url('produk', $produk->id)])
                    <a href="{{url('produk', $produk->id)}}" class="btn btn-primary">Detail</a>
                  </div>
                </td>
                <td>{{$produk->nama}}</td>
                <td>{{$produk->harga}}</td>
                <td>{{$produk->berat}}</td>
                <td>{{$produk->stok}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection