@extends('pengguna.base')

@section('content')

<!-- banner -->
<div class="banner">
  <div class="container">
    <div class="banner-info animated wow zoomIn" data-wow-delay=".5s">

      <script src="{{url('public')}}/assets/js/jquery.wmuSlider.js"></script>
      <script>
        $('.example1').wmuSlider();
      </script>
    </div>
  </div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
  <div class="container">
    <div class="banner-bottom-grids">
      <div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <div class="grid">
          <figure class="effect-julia">
            <img src="{{url('public')}}/assets/images/4.jpg" alt=" " class="img-responsive" />
            <figcaption>
              <h3>Best <span>Store</span><i> in online shopping</i></h3>
              <div>
                <p>Cupidatat non proident, sunt</p>
                <p>Officia deserunt mollit anim</p>
                <p>Laboris nisi ut aliquip consequat</p>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
      <div class="banner-bottom-grid-left1 animated wow slideInUp" data-wow-delay=".5s">
        <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
          <div class="banner-bottom-grid-left-grid1">
            <img src="{{url('public')}}/assets/images/1.jpg" alt=" " class="img-responsive" />
          </div>
          <div class="banner-bottom-grid-left1-pos">
            <p>Discount 45%</p>
          </div>
        </div>
        <div class="banner-bottom-grid-left-grid left1-grid grid-left-grid1">
          <div class="banner-bottom-grid-left-grid1">
            <img src="{{url('public')}}/assets/images/2.jpg" alt=" " class="img-responsive" />
          </div>
          <div class="banner-bottom-grid-left1-position">
            <div class="banner-bottom-grid-left1-pos1">
              <p>Latest New Collections</p>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-bottom-grid-right animated wow slideInRight" data-wow-delay=".5s">
        <div class="banner-bottom-grid-left-grid grid-left-grid1">
          <div class="banner-bottom-grid-left-grid1">
            <img src="{{url('public')}}/assets/images/3.jpg" alt=" " class="img-responsive" />
          </div>
          <div class="grid-left-grid1-pos">
            <p>top and classic designs <span>2016 Collection</span></p>
          </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //banner-bottom -->
<!-- collections -->
<div class="new-collections">
  <div class="container">
    <h3 class="animated wow zoomIn" data-wow-delay=".5s">New Collections</h3>
    <p class="est animated wow zoomIn" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
      deserunt mollit anim id est laborum.</p>
    <div class="new-collections-grids">
      <div class="col-md-3 new-collections-grid">
        <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
          @foreach($list_produk as $produk)
          <div class="new-collections-grid1-image">
            <a href="{{url('detailproduk', $produk->id)}}" class="product-image"><img src="{{url('public')}}/assets/images/7.jpg" alt=" " class="img-responsive" /></a>
            <div class="new-collections-grid1-image-pos">
              <a href="{{url('detailproduk, $produk->id')}}">Quick View</a>
            </div>
            <div class="new-collections-grid1-right">
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <h4><a href="{{url('detailproduk', $produk->id)}}">{{$produk->nama}}</a></h4>
          <p>Vel illum qui dolorem eum fugiat.</p>
          <div class="new-collections-grid1-left simpleCart_shelfItem">
            <p><i>RP 300.000</i> <span class="item_price">Rp {{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
          </div>
          @endforeach
        </div>
        <!-- <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
          <div class="new-collections-grid1-image">
            <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/8.jpg" alt=" " class="img-responsive" /></a>
            <div class="new-collections-grid1-image-pos">
              <a href="{{url('detailproduk')}}">Quick View</a>
            </div>
            <div class="new-collections-grid1-right">
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <h4><a href="{{url('detailproduk')}}">Running Shoes</a></h4>
          <p>Vel illum qui dolorem eum fugiat.</p>
          <div class="new-collections-grid1-left simpleCart_shelfItem">
            <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
          </div>
        </div> -->
      </div>
      <div class="col-md-6 new-collections-grid">
        <div class="new-collections-grid1 new-collections-grid1-image-width animated wow slideInUp" data-wow-delay=".5s">
          @foreach($list_produk as $produk)
          <div class="new-collections-grid1-image">
            <a href="{{url('detailproduk', $produk->id)}}" class="product-image"><img src="{{url('public')}}/assets/images/5.jpg" alt=" " class="img-responsive" /></a>
            <div class="new-collections-grid1-image-pos new-collections-grid1-image-pos1">
              <a href="{{url('detailproduk', $produk->id)}}">Quick View</a>
            </div>
            <div class="new-collections-grid1-right new-collections-grid1-right-rate">
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
            <div class="new-one">
              <p>New</p>
            </div>
          </div>
          <h4><a href="{{url('detailproduk', $produk->id)}}">{{$produk->nama}}</a></h4>
          <p>Vel illum qui dolorem eum fugiat.</p>
          <div class="new-collections-grid1-left simpleCart_shelfItem">
            <p><i>Rp 200.000</i> <span class="item_price">Rp {{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
          </div>
          @endforeach
        </div>
        <!-- <div class="new-collections-grid-sub-grids">
          <div class="new-collections-grid1-sub">
            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
              <div class="new-collections-grid1-image">
                <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/6.jpg" alt=" " class="img-responsive" /></a>
                <div class="new-collections-grid1-image-pos">
                  <a href="{{url('detailproduk')}}">Quick View</a>
                </div>
                <div class="new-collections-grid1-right">
                  <div class="rating">
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </div>
              <h4><a href="{{url('detailproduk')}}">Wall Lamp</a></h4>
              <p>Vel illum qui dolorem eum fugiat.</p>
              <div class="new-collections-grid1-left simpleCart_shelfItem">
                <p><i>$480</i> <span class="item_price">$400</span><a class="item_add" href="#">add to cart </a></p>
              </div>
            </div>
          </div>
          <div class="new-collections-grid1-sub">
            <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
              <div class="new-collections-grid1-image">
                <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/9.jpg" alt=" " class="img-responsive" /></a>
                <div class="new-collections-grid1-image-pos">
                  <a href="{{url('detailproduk')}}">Quick View</a>
                </div>
                <div class="new-collections-grid1-right">
                  <div class="rating">
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="rating-left">
                      <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                  </div>
                </div>
              </div>
              <h4><a href="{{url('detailproduk')}}">Wall Lamp</a></h4>
              <p>Vel illum qui dolorem eum fugiat.</p>
              <div class="new-collections-grid1-left simpleCart_shelfItem">
                <p><i>$280</i> <span class="item_price">$150</span><a class="item_add" href="#">add to cart </a></p>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div> -->
      </div>
      <div class="col-md-3 new-collections-grid">
        <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
          @foreach($list_produk as $produk)
          <div class="new-collections-grid1-image">
            <a href="{{url('detailproduk', $produk->id)}}" class="product-image"><img src="{{url('public')}}/assets/images/10.jpg" alt=" " class="img-responsive" /></a>
            <div class="new-collections-grid1-image-pos">
              <a href="{{url('detailproduk', $produk->id)}}">Quick View</a>
            </div>
            <div class="new-collections-grid1-right">
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <h4><a href="{{url('detailproduk', $produk->id)}}">{{$produk->nama}}</a></h4>
          <p>Vel illum qui dolorem eum fugiat.</p>
          <div class="new-collections-grid1-left simpleCart_shelfItem">
            <p><i>$180</i> <span class="item_price">Rp {{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
          </div>
          @endforeach
        </div>
        <!-- <div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
          <div class="new-collections-grid1-image">
            <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/11.jpg" alt=" " class="img-responsive" /></a>
            <div class="new-collections-grid1-image-pos">
              <a href="{{url('detailproduk')}}">Quick View</a>
            </div>
            <div class="new-collections-grid1-right">
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="clearfix"> </div>
              </div>
            </div>
          </div>
          <h4><a href="{{url('detailproduk')}}">Stones Bangles</a></h4>
          <p>Vel illum qui dolorem eum fugiat.</p>
          <div class="new-collections-grid1-left simpleCart_shelfItem">
            <p><i>$340</i> <span class="item_price">$257</span><a class="item_add" href="#">add to cart </a></p>
          </div>
        </div> -->
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //collections -->
<!-- new-timer -->
<div class="timer">
  <div class="container">
    <div class="timer-grids">
      <div class="col-md-8 timer-grid-left animated wow slideInLeft" data-wow-delay=".5s">
        <h3><a href="products.html">sunt in culpa qui officia deserunt mollit</a></h3>
        <div class="rating">
          <div class="rating-left">
            <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
          </div>
          <div class="rating-left">
            <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
          </div>
          <div class="rating-left">
            <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
          </div>
          <div class="rating-left">
            <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive" />
          </div>
          <div class="rating-left">
            <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive" />
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="new-collections-grid1-left simpleCart_shelfItem timer-grid-left-price">
          <p><i>$580</i> <span class="item_price">$550</span></p>
          <h4>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
            nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
            qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
            dolorem eum fugiat quo voluptas nulla pariatur.</h4>
          <p><a class="item_add timer_add" href="#">add to cart </a></p>
        </div>
        <div id="counter"> </div>
        <script src="{{url('public')}}/assets/js/jquery.countdown.js"></script>
        <script src="{{url('public')}}/assets/js/script.js"></script>
      </div>
      <div class="col-md-4 timer-grid-right animated wow slideInRight" data-wow-delay=".5s">
        <div class="timer-grid-right1">
          <img src="{{url('public')}}/assets/images/17.jpg" alt=" " class="img-responsive" />
          <div class="timer-grid-right-pos">
            <h4>Special Offer</h4>
          </div>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //new-timer -->
<!-- collections-bottom -->
<div class="collections-bottom">
  <div class="container">
    <div class="collections-bottom-grids">
      <div class="collections-bottom-grid animated wow slideInLeft" data-wow-delay=".5s">
        <h3>45% Offer For <span>Women & Children's</span></h3>
      </div>
    </div>
    <div class="newsletter animated wow slideInUp" data-wow-delay=".5s">
      <h3>Newsletter</h3>
      <p>Join us now to get all news and special offers.</p>
      <form>
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        <input type="email" value="Enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
        <input type="submit" value="Join Us">
      </form>
    </div>
  </div>
</div>
<!-- //collections-bottom -->

@endsection