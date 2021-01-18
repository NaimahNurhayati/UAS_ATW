@extends('pengguna.base')

@section('content')

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Mail Us</li>
    </ol>
  </div>
</div>
<!-- //breadcrumbs -->
<!-- mail -->
<div class="mail animated wow zoomIn" data-wow-delay=".5s">
  <div class="container">
    <h3>Mail Us</h3>
    <p class="est">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
    <div class="mail-grids">
      <div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <form>
          <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
          <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
          <input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" required="">
          <textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
          <input type="submit" value="Submit Now">
        </form>
      </div>
      <div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
        <div class="mail-grid-right1">
          <img src="{{url('public')}}/assets/images/pp.jpg" alt=" " class="img-responsive" />
          <h4>Naimah Nurhayati <span>Manager</span></h4>
          <ul class="phone-mail">
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +6289691866797</li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="naimahdaulay6@gmail.com">naimahdaulay6@gmail.com</a></li>
          </ul>
          <ul class="social-icons">
            <li><a href="https://m.facebook.com/imh.dly" class="facebook"></a></li>
            <li><a href="https://mobile.twitter.com/nmhdaulay" class="twitter"></a></li>
            <li><a href="https://www.instagram.com/naimahdly03/" class="instagram"></a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13198.34947791503!2d109.95682768580332!3d-1.865315599895662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05195b4a242cd3%3A0x3e5c35f4daa1e79a!2sSurau%20Baiturrahman!5e0!3m2!1sid!2sid!4v1610965010459!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</div>
<!-- //mail -->
@endsection