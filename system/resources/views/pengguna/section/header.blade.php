@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp

<div class="header">
  <div class="container">
    <div class="header-grid">
      <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <ul>
          <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:naimahdaulay6@gmail.com">naimahdaulay6@gmail.com</a></li>
          <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6289691866797</li>
          <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{url('login')}}">Login</a></li>
          <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{url('register')}}">Register</a></li>
        </ul>
      </div>
      <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
        <ul class="social-icons">
          <li><a href="https://m.facebook.com/imh.dly" class="facebook"></a></li>
          <li><a href="https://mobile.twitter.com/nmhdaulay" class="twitter"></a></li>
          <li><a href="https://www.instagram.com/naimahdly03/" class="instagram"></a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="logo-nav">
      <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
        <h1><a href="index.html">N'D store <span>Muslimah Shop</span></a></h1>
      </div>
      <div class="logo-nav-left1">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{url('/')}}" class="act nav-link {{checkRouteActive('/')}}">Home</a></li>
              <!-- Mega Menu -->
              <li class="nav-item">
                <a href="{{url('produkbaru')}}" class="nav-link {{checkRouteActive('produkbaru')}}">Produk</a>
              </li>
              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle nav-link {{checkRouteActive('kategori')}}" data-toggle="dropdown">Kategori<b class="caret"></b></a>
                <ul class="dropdown-menu multi-column columns-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Home Collection</h6>
                        <li><a href="furniture.html">Cookware</a></li>
                        <li><a href="furniture.html">Sofas</a></li>
                        <li><a href="furniture.html">Dining Tables</a></li>
                        <li><a href="furniture.html">Shoe Racks</a></li>
                        <li><a href="furniture.html">Home Decor</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Office Collection</h6>
                        <li><a href="furniture.html">Carpets</a></li>
                        <li><a href="furniture.html">Tables</a></li>
                        <li><a href="furniture.html">Sofas</a></li>
                        <li><a href="furniture.html">Shoe Racks</a></li>
                        <li><a href="furniture.html">Sockets</a></li>
                        <li><a href="furniture.html">Electrical Machines</a></li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Decorations</h6>
                        <li><a href="furniture.html">Toys</a></li>
                        <li><a href="furniture.html">Wall Clock</a></li>
                        <li><a href="furniture.html">Lighting</a></li>
                        <li><a href="furniture.html">Top Brands</a></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li> -->
              <li class="nav-item"><a href="{{url('mail')}}" class="nav-link {{checkRouteActive('mail')}}">Mail Us</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="logo-nav-right">
        <div class="search-box">
          <div id="sb-search" class="sb-search">
            <form>
              <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
              <input class="sb-search-submit" type="submit" value="">
              <span class="sb-icon-search"> </span>
            </form>
          </div>
        </div>
        <!-- search-scripts -->
        <script src="{{url('public')}}/assets/js/classie.js"></script>
        <script src="{{url('public')}}/assets/js/uisearch.js"></script>
        <script>
          new UISearch(document.getElementById('sb-search'));
        </script>
        <!-- //search-scripts -->
      </div>
      <div class="header-right">
        <div class="cart box_1">
          <a href="{{url('checkout')}}">
            <h3>
              <div class="total">
                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
              </div>
              <img src="{{url('public')}}images/bag.png" alt="" />
            </h3>
          </a>
          <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
          <div class="clearfix"> </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>