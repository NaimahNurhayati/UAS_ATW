<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/assets3/img/favicon.ico">
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
  <link rel="stylesheet" href="{{url('public')}}/assets3/css/metisMenu/metisMenu-vertical.css">
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

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
        <div class="text-center custom-login">
          <h3>Registration</h3>
        </div>
        <div class="hpanel">
          <div class="panel-body">

            @include('templateadmin.utils.notif')
            <form action="{{url('register')}}" method="post">
              @csrf
              <div class="row">
                <div class="form-group col-lg-12">
                  <label>Nama</label>
                  @include('templateadmin.utils.errors', ['item' => 'nama'])
                  <input type="text" placeholder="nama" title="Please enter you nama" name="nama" id="nama" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                  <label>Username</label>
                  @include('templateadmin.utils.errors', ['item' => 'username'])
                  <input type="text" placeholder="username" title="Please enter you username" name="username" id="username" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                  <label>Email Address</label>
                  @include('templateadmin.utils.errors', ['item' => 'email'])
                  <input type="text" placeholder="email" title="Please enter you email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                  <label>Password</label>
                  <input type="password" title="Please enter your password" placeholder="******" name="password" id="password" class="form-control">
                </div>
                <div class="checkbox col-lg-12">
                  <input type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success loginbtn">Register</button>
                <button class="btn btn-default"> <a href="{{url('login')}}"></a> Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
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
  <script src="js/bootstrap.min.js"></script>
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