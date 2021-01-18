<!DOCTYPE html>
<html>

<head>
  <title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //for-mobile-apps -->
  <link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- js -->
  <script src="{{url('public')}}/assets/js/jquery.min.js"></script>
  <!-- //js -->
  <!-- cart -->
  <script src="{{url('public')}}/assets/js/simpleCart.min.js"></script>
  <!-- cart -->
  <!-- for bootstrap working -->
  <script type="text/javascript" src="{{url('public')}}/assets/js/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <!-- timer -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/jquery.countdown.css" />
  <!-- //timer -->
  <!-- animation-effect -->
  <link href="{{url('public')}}/assets/css/animate.min.css" rel="stylesheet">
  <script src="{{url('public')}}/assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- //animation-effect -->
</head>

<body>
  <!-- header -->
  @include('pengguna.section.header')
  <!-- //header -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- footer -->
  @include('pengguna.section.footer')
  <!-- //footer -->
</body>

</html>