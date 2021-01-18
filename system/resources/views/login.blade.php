@extends('pengguna.base')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Login Page</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- login -->
<div class="login">
  <div class="container">
    <h3 class="animated wow zoomIn" data-wow-delay=".5s">Login Form</h3>
    <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
    <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
      <form action="{{url('login')}}" method="post">
        @csrf
        <input type="email" placeholder="Email Address" name="email" required=" ">
        <input type="password" placeholder="Password" name="password" required=" ">
        <div class="forgot">
          <a href="#">Forgot Password?</a>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
    <h4 class="animated wow slideInUp" data-wow-delay=".5s">For New People</h4>
    <p class="animated wow slideInUp" data-wow-delay=".5s"><a href="{{url('register')}}">Register Here</a> (Or) go back to <a href="{{url('/')}}">Home<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
  </div>
</div>
<!-- //login -->
@endsection