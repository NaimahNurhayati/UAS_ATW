<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/owl.carousel.css">
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/owl.theme.css">
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/normalize.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/form/all-type-forms.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="color-line"></div>
  <div class="container-fluid">
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
        <div class="text-center m-b-md custom-login">
          <h3>LOGIN</h3>
          <p>FASHOLSHOP Fashion Wanita</p>
        </div>
        <div class="hpanel">
          <div class="panel-body">
            @include('templateadmin.utils.notif')
            <form action="{{url('login')}}" method="post">
              @csrf
              <div class="form-group">
                <label class="control-label" for="email">Email</label>
                <input type="text" placeholder="example@gmail.com" title="Please enter you email" required="" value="" name="email" id="email" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="password">Password</label>
                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
              </div>
              <!-- <div class="form-group">
                <select name="login_as" class="form-control">
                  <option value="1">Penjual</option>
                  <option value="2">Pembeli</option>
                </select>
              </div> -->
              <div class="checkbox login-checkbox">
                <label>
                  <input type="checkbox" class="i-checks"> ingatkan saya </label>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              </div>
            </form>
            <form action="{{url('register')}}">
              <div class="col-4">
                <button type="submit" class="btn btn-default btn-block">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <p>&copy; 2020 @if(date("Y") > '2020') {{date("Y")}} @endif love yourself</p>
      </div>
    </div>
  </div>

  <!-- jquery
		============================================ -->
  <script src="{{url('public')}}/assets3/js/vendor/jquery-1.11.3.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{url('public')}}/assets3/js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/metisMenu/metisMenu.min.js"></script>
  <script src="{{url('public')}}/assets3/js/metisMenu/metisMenu-active.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/tab.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/icheck/icheck.min.js"></script>
  <script src="{{url('public')}}/assets3/js/icheck/icheck-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="{{url('public')}}/assets3/js/main.js"></script>
</body>

</html>