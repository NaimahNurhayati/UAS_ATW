@extends('template.opra')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          Tambah Data Produk
        </div>
        <div class="card-body">
          <form action="{{url('operator/produk')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
              <div class="form-group">
                <label for="" class="control-label"> Harga</label>
                <input type="text" class="form-control" name="harga">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="" class="control-label"> Berat</label>
                <input type="text" class="form-control" name="berat">
              </div>
            </div>

            <div class="col-md-3">
              <div class="form-group">
                <label for="" class="control-label"> Stok</label>
                <input type="text" class="form-control" name="stok">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="" class="control-label"> Size</label>
                  <input type="text" class="form-control" name="size">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="" class="control-label"> Color</label>
                  <input type="text" class="form-control" name="color">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="" class="control-label"> Foto</label>
                  <input type="file" class="form-control" name="foto" accept=".jpg">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="control-label"> Deskripsi</label>
              <textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
            </div>

            <button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection