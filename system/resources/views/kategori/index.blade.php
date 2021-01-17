@extends('templateadmin.admin')

@section('content')
<section class="w3l-ecommerce-main">
  <!-- /products-->
  <div class="ecom-contenthny ">
    <h3 class="hny-title mb-0 text-center"><span style="color:purple;">Data</span> <span style="color: blue;">Kategori</span></h3>
    <p class="text-center my-4">
      <a href="{{url('kategori/create')}}" class="btn btn-primary"> <i class="fa fa-plus mr-2"></i> Tambah Data Kategori</a>
    </p>
    <!-- /row-->
    <div class="ecom-products-grids row mt-lg-1 ">
      @foreach($list_kategori as $kategori)
      <div class="col-lg-3 col-6 product-incfhny mt-4 center" style="margin-bottom: 50px;">
        <div class="product-grid2 text-center">

          <h3 class="title" style="color: black; font-weight:bolder">{{$kategori->nama_kategori}}</h3>

          <div class="product-image2 display: flex;">
            <a href="#">
              <img style="width: 200px; height:auto;" src="{{url('public')}}/assets/images/products/p0.jpg" alt="">
            </a>
          </div>
          <div class="btn-group" style="display: flex; justify-content:center; flex-wrap:nowrap ">
            <a href="{{url('kategori', $kategori->id)}}" class="btn btn-success"> <i class="fa fa-info"></i></a> </a>
            <a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning"> <i class="fa fa-edit"></i></a> </a>
            @include('templateadmin.utils.delete', ['url' => url('kategori', $kategori->id)])
          </div>
        </div>
      </div>
      @endforeach


    </div>


  </div>
</section>


@endsection