@extends('pengguna.base')

@section('content')

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Pembayaran</li>
    </ol>
  </div>
</div>

<div class="body-content outer-top-xs">
  <div class="container">
    <div class="row ">
      <div class="shopping-cart">

        <div class="col-md-4 col-sm-12 estimate-ship-tax">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <span class="estimate-title">Data Identitas</span>
                  <p>Masukkan Identitas Anda</p>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-group">
                    <input type="text" class="form-control unicase-form-control text-input" placeholder="Nama Anda">
                  </div>
                </td>
              </tr>
            </tbody><!-- /tbody -->
          </table><!-- /table -->
        </div><!-- /.estimate-ship-tax -->


        <div class="col-md-4 col-sm-12 estimate-ship-tax">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <span class="estimate-title">Alamat Lengkap</span>
                  <p>Masukkan Alamat Lengkap Anda</p>
                </th>
              </tr>
            </thead><!-- /thead -->
            <tbody>
              <tr>
                <td>
                  <div class="form-group">
                    <label class="control-label">Provinsi</label>
                    <select class="form-control" onchange="gantiProvinsi(this.value)">
                      <option>Pilih Provinsi</option>
                      @foreach($list_provinsi as $provinsi)
                      <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Kabupaten</label>
                    <select class="form-control" id="kabupaten" onchange="gantiKabupaten(this.value)">
                      <option>Pilih Provinsi Terlebih Dahulu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Kecamatan</label>
                    <select class="form-control" id="kecamatan" onchange="gantiKecamatan(this.value)">
                      <option>Pilih Kabupaten Terlebih Dahulu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Desa</label>
                    <select class="form-control" id="desa">
                      <option>Pilih Kecamatan Terlebih Dahulu</option>
                    </select>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.estimate-ship-tax -->

        <div class="col-md-4 col-sm-12 cart-shopping-total">
          <table class="table">
            <thead>
              <tr>
                <th>
                  <div class="cart-sub-total">
                    Subtotal<span class="inner-left-md">$600.00</span>
                  </div>
                  <div class="cart-grand-total">
                    Grand Total<span class="inner-left-md">$600.00</span>
                  </div>
                </th>
              </tr>
            </thead><!-- /thead -->
            <tbody>
              <tr>
                <td>
                  <div class="cart-checkout-btn pull-right">
                    <a href="{{url('bayar')}}" type="submit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
                    <span class="">Lakukan Pembayaran</span>
                  </div>
                </td>
              </tr>
            </tbody><!-- /tbody -->
          </table><!-- /table -->
        </div><!-- /.cart-shopping-total -->
      </div><!-- /.shopping-cart -->
    </div> <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->

    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div><!-- /.container -->
</div><!-- /.body-content -->

<script>
  contoh = {
    "id": 6101,
    "id_provinsi": "61",
    "name": "KABUPATEN SAMBAS"
  }

  function gantiProvinsi(id) {
    $.get("api/provinsi/" + id, function(result) {
      result = JSON.parse(result)
      option = ""
      for (item of result) {
        option += `<option value="${item.id}">${item.name}</option}>`;
      }
      $("#kabupaten").html(option)
    });
  }

  function gantiKabupaten(id) {
    $.get("api/kabupaten/" + id, function(result) {
      result = JSON.parse(result)
      option = ""
      for (item of result) {
        option += `<option value="${item.id}">${item.name}</option}>`;
      }
      $("#kecamatan").html(option)
    });
  }

  function gantiKecamatan(id) {
    $.get("api/kecamatan/" + id, function(result) {
      result = JSON.parse(result)
      option = ""
      for (item of result) {
        option += `<option value="${item.id}">${item.name}</option}>`;
      }
      $("#desa").html(option)
    });
  }
</script>
@endsection