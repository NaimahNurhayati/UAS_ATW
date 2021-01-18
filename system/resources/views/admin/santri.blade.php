@extends('template.opra')

@section('content')
<div class="container data-lokasi">
  <div class="lokasi" style="text-align: center; padding-top:10px;">
    <h4>Data Santi Baru Yang Mendaftar</h4><br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Lengkap</th>
          <th scope="col">Tingkat Pendidikan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td><a href="#" class="btn btn-primary">Detail</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection