<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>detail produk</title>

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/main.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/blue.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.carousel.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/owl.transitions.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/rateit.css">
  <link rel="stylesheet" href="{{url('public')}}/assets/css/bootstrap-select.min.css">
  <link href="{{url('public')}}/assets/css/lightbox.css" rel="stylesheet">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="{{url('public')}}/assets/css/font-awesome.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">
              <li class="myaccount"><a href="#"><span>My Account</span></a></li>
              <li class="login"><a href="{{url('/login')}}"><span>Login</span></a></li>
            </ul>
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="{{url('/template')}}"> <img src="{{url('public')}}/assets/images/logo.jpg" alt="logo" style="width: 200px;"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">
                  <ul class="categories-filter animate-dropdown">
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu">
                        <li class="menu-header">Fashion</li>
                        @foreach($list_kategori as $kategori)
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">{{$kategori->nama_kategori}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                  </ul>
                  <input class="search-field" placeholder="Search here..." />
                  <a class="search-button" href="#"></a>
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown"> <a href="{{url('/template')}}">Home</a> </li>
                  <li class="dropdown"> <a href="{{url('/template.produk')}}">Produk</a> </li>
                  <li class="dropdown"> <a href="{{url('/template.promo')}}">Promo</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>
  <!-- ============================================== HEADER : END ============================================== -->
  <div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-inner">
        <ul class="list-inline list-unstyled">
          <li><a href="{{url('/template')}}">Home</a></li>
          <li><a href="{{url('/template.produk')}}">Produk</a></li>
          <li class='active'>Detail</li>
        </ul>
      </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
  </div><!-- /.breadcrumb -->
  <div class="body-content outer-top-xs">
    <div class='container'>
      <div class='row single-product'>
        <div class='col-xs-12 col-sm-12 col-md-3 sidebar'>

        </div><!-- /.sidebar -->
        <div class='col-xs-12 col-sm-12 col-md-9 rht-col' style="margin: 0 0 0 160px;">
          <div class="detail-block">
            <div class="row">

              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                  <div id="owl-single-product">
                    <div class="single-product-gallery-item" id="slide1">
                      <a data-lightbox="image-1" data-title="Gallery" href="{{url('public')}}/assets/images/products/diskon.png">
                        <img class="img-responsive" alt="" src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/diskon.png" />
                      </a>
                    </div><!-- /.single-product-gallery-item -->
                  </div><!-- /.single-product-slider -->

                </div><!-- /.single-product-gallery -->
              </div><!-- /.gallery-holder -->
              <div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
                <div class="product-info">
                  <h1 class="name">{{$promo->nama}}</h1>
                  <div class="rating-reviews m-t-20">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="pull-left">
                          <div class="rating rateit-small"></div>
                        </div>
                        <div class="pull-left">
                          <div class="reviews">
                            <a href="#" class="lnk">(100 Reviews)</a>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.rating-reviews -->

                  <div class="stock-container info-container m-t-10">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="pull-left">
                          <div class="stock-box">
                            <span class="label">Availability :</span>
                          </div>
                        </div>
                        <div class="pull-left">
                          <div class="stock-box">
                            <span class="value">In Stock</span>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.stock-container -->

                  <div class="description-container m-t-20">
                    Jumlah Promo : {{$promo->jumlah}} produk
                    <br>
                    Harga Awal : {{$promo->harga_awal}} gr
                  </div><!-- /.description-container -->

                  <div class="price-container info-container m-t-30">
                    <div class="row">


                      <div class="col-sm-6 col-xs-6">
                        <div class="price-box">
                          <span class="price">Rp {{number_format($promo->harga_promo)}}</span>
                          <span class="price-strike">Rp {{number_format($promo->harga_awal)}}</span>
                        </div>
                      </div>

                      <div class="col-sm-6 col-xs-6">
                        <div class="favorite-button m-t-5">
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                            <i class="fa fa-heart"></i>
                          </a>
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                            <i class="fa fa-signal"></i>
                          </a>
                          <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                            <i class="fa fa-envelope"></i>
                          </a>
                        </div>
                      </div>

                    </div><!-- /.row -->
                  </div><!-- /.price-container -->

                  <div class="quantity-container info-container">
                    <div class="row">

                      <div class="add-btn">
                        <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                      </div>


                    </div><!-- /.row -->
                  </div><!-- /.quantity-container -->

                </div><!-- /.product-info -->
              </div><!-- /.col-sm-7 -->
            </div><!-- /.row -->
          </div>

          <div class="product-tabs inner-bottom-xs">
            <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-3">
                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                  <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                  <li><a data-toggle="tab" href="#tags">TAGS</a></li>
                </ul><!-- /.nav-tabs #product-tabs -->
              </div>
              <div class="col-sm-12 col-md-9 col-lg-9">

                <div class="tab-content">

                  <div id="description" class="tab-pane in active">
                    <div class="product-tab">
                      <p class="text">{!! nl2br($promo->deskripsi)!!}</p>
                    </div>
                  </div><!-- /.tab-pane -->

                  <div id="tags" class="tab-pane">
                    <div class="product-tag">

                      <h4 class="title">Product Tags</h4>
                      <form class="form-inline form-cnt">
                        <div class="form-container">

                          <div class="form-group">
                            <label for="exampleInputTag">Add Your Tags: </label>
                            <input type="email" id="exampleInputTag" class="form-control txt">


                          </div>

                          <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                        </div><!-- /.form-container -->
                      </form><!-- /.form-cnt -->

                      <form class="form-inline form-cnt">
                        <div class="form-group">
                          <label>&nbsp;</label>
                          <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                        </div>
                      </form><!-- /.form-cnt -->

                    </div><!-- /.product-tab -->
                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.product-tabs -->

          <!-- ============================================== UPSELL PRODUCTS ============================================== -->
          <section class="section featured-product">
            <div class="row">
              <div class="col-lg-3">
                <h3 class="section-title">Upsell Products</h3>
                <div class="ad-imgs">
                  <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner1.jpg" alt="">
                  <img class="img-responsive" src="{{url('public')}}/assets/images/banners/home-banner2.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <div class="owl-carousel homepage-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('detail', $promo->id)}}"><img src="{{url('public')}}/assets/images/products/p1.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('detail', $promo->id)}}">Set Pakaian</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 79.000 </span>
                            <span class="price-before-discount">Rp 99.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p2.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag sale"><span>sale</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Kaos Lengan Panjang</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 59.000 </span>
                            <span class="price-before-discount">Rp 89.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}} title=" Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p3.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Sepatu Kantor</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 100.000 </span>
                            <span class="price-before-discount">Rp 180.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/products/p4.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Gelang Bows</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 45.000 </span>
                            <span class="price-before-discount">Rp 85.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/p5.jpg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Dress pink</a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 85.000 </span>
                            <span class="price-before-discount">Rp 99.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->

                  <div class="item item-carousel">
                    <div class="products">

                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a href="{{url('/template.detail')}}"><img src="{{url('public')}}/assets/images/blank.gif" data-echo="{{url('public')}}/assets/images/products/44.jpeg" alt=""></a>
                          </div><!-- /.image -->

                          <div class="tag hot"><span>hot</span></div>
                        </div><!-- /.product-image -->


                        <div class="product-info text-left">
                          <h3 class="name"><a href="{{url('/template.detail')}}">Shirt Putih </a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>

                          <div class="product-price">
                            <span class="price">
                              Rp 75.000 </span>
                            <span class="price-before-discount">Rp 99.000</span>

                          </div><!-- /.product-price -->

                        </div><!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                  <i class="fa fa-shopping-cart"></i>
                                </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                              </li>

                              <li class="lnk wishlist">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Wishlist">
                                  <i class="icon fa fa-heart"></i>
                                </a>
                              </li>

                              <li class="lnk">
                                <a class="add-to-cart" href="{{url('/template.detail')}}" title="Compare">
                                  <i class="fa fa-signal"></i>
                                </a>
                              </li>
                            </ul>
                          </div><!-- /.action -->
                        </div><!-- /.cart -->
                      </div><!-- /.product -->

                    </div><!-- /.products -->
                  </div><!-- /.item -->
                </div><!-- /.home-owl-carousel -->
              </div>
            </div>
          </section><!-- /.section -->
          <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

        </div><!-- /.col -->
        <div class="clearfix"></div>
      </div><!-- /.row -->
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider">

        <div class="logo-slider-inner">
          <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item m-t-10">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand3.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand6.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand2.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand4.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand1.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->

            <div class="item">
              <a href="#" class="image">
                <img data-echo="{{url('public')}}/assets/images/brands/brand5.png" src="{{url('public')}}/assets/images/blank.gif" alt="">
              </a>
            </div>
            <!--/.item-->
          </div><!-- /.owl-carousel #logo-slider -->
        </div><!-- /.logo-slider-inner -->

      </div><!-- /.logo-slider -->
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
  </div><!-- /.body-content -->

  <footer id="footer" class="footer color-bg">
    <div class="copyright-bar">
      <div class="container">
        <div class="col-xs-12 col-sm-4 no-padding social">
          <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
            <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 no-padding copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a> </div>
        <div class="col-xs-12 col-sm-4 no-padding">
          <div class="clearfix payment-methods">
            <ul>
              <li><img src="{{url('public')}}/assets/images/payments/1.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/2.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/3.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/4.png" alt=""></li>
              <li><img src="{{url('public')}}/assets/images/payments/5.png" alt=""></li>
            </ul>
          </div>
          <!-- /.payment-methods -->
        </div>
      </div>
    </div>
  </footer>
  <!-- ============================================================= FOOTER : END============================================================= -->

  <!-- For demo purposes – can be removed on production -->

  <!-- For demo purposes – can be removed on production : End -->

  <!-- JavaScripts placed at the end of the document so the pages load faster -->
  <script src="{{url('public')}}/assets/js/jquery-1.11.1.min.js"></script>

  <script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>

  <script src="{{url('public')}}/assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="{{url('public')}}/assets/js/owl.carousel.min.js"></script>

  <script src="{{url('public')}}/assets/js/echo.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.easing-1.3.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap-slider.min.js"></script>
  <script src="{{url('public')}}/assets/js/jquery.rateit.min.js"></script>
  <script src="{{url('public')}}/assets/js/lightbox.min.js"></script>
  <script src="{{url('public')}}/assets/js/bootstrap-select.min.js"></script>
  <script src="{{url('public')}}/assets/js/wow.min.js"></script>
  <script src="{{url('public')}}/assets/js/scripts.js"></script>
</body>

</html>