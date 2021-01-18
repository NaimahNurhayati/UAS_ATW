@extends('template.opra')

@section('content')

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>1</h3>
            <p>Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{url('admin/produk')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>2</h3>
            <p>Admni</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="{{url('admin/admin')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>3</h3>
            <p>Pembeli</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-container" style="text-align: center; margin: 150px 50px">
        <h2>SELAMAT DATANG</h2>
        <p class="p-heading p-large">Anda dapat memanajemen data produk yang ada jual Sistem E-Commerce ini</p>
      </div>
    </div> <!-- end of col -->
  </div> <!-- end of row -->
</div>
@endsection