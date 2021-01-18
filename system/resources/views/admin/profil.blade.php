@extends('template.opra')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding: 10px 50px;">
      <div class="card">
        <div class="card-header">
          Profil Operator
        </div>
        <div class="card-body" style="height: 440px; margin-right:20px;">
          <div class="row">
            <div class="col-md-5">
              <img src="{{url('public')}}/assets/images/project-7.jpg" width="350" />
              <h4> {{$admin->nama}}</h4>
            </div>
            <div class="col-md-7">
              <small class="text-muted">Pesantren Yang dikelola </small>
              <h6>{{$admin->pesantren}}</h6> <small class="text-muted p-t-30 db">Nomor Handphone</small>
              <h6>{{$admin->no_hp}}</h6> <small class="text-muted p-t-30 db">Alamat</small>
              <h6>{{$admin->alamat}}</h6><br>
            </div>
          </div>
          <a href="{{url('operator/profil')}}/edit" class="btn btn-warning float-right"> <i class="fa fa-edit"></i> Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection