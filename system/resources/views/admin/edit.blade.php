@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          Edit Data Operator Pondok Pesantren
        </div>
        <div class="card-body">
          <form action="{{url('operator/profil', $operator->id)}}" method="post">
            @csrf
            @method("put")
            <div class="form-group">
              <label for="" class="control-label">Nama Operator</label>
              <input type="text" class="form-control" name="nama_operator" value="{{$operator->nama_operator}}">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Pesantren Yang Dikelola</label>
              <input type="text" class="form-control" name="pesantren" value="{{$operator->pesantren}}">
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="" class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" value="{{$operator->username}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="" class="control-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label for="" class="control-label">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="{{$operator->alamat}}">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="" class="control-label">No Handpone</label>
                  <input type="text" class="form-control" name="no_hp" value="{{$operator->no_hp}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
            <a href="{{url('operator/profil')}}" class="btn btn-dark float-right mr-3">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection