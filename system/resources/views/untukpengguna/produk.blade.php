@extends('pengguna.base')

@section('content')

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
      <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
      <li class="active">Products</li>
    </ol>
  </div>
</div>
<div class="products">
  <div class="container">
    <div class="col-md-4 products-left">
      <div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
        <h3>Filter By Price</h3>
        <ul class="dropdown-menu1">
          <li><a href="">
              <div id="slider-range"></div>
              <input type="text" id="amount" style="border: 0" />
            </a></li>
        </ul>
        <script type='text/javascript'>
          //<![CDATA[ 
          $(window).load(function() {
            $("#slider-range").slider({
              range: true,
              min: 0,
              max: 100000,
              values: [20000, 80000],
              slide: function(event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
              }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));


          }); //]]>
        </script>
        <script type="text/javascript" src="{{url('public')}}/assets/js/jquery-ui.min.js"></script>
        <!---->
      </div>
      <div class="categories animated wow slideInUp" data-wow-delay=".5s">
        <h3>Categories</h3>
        <ul class="cate">
          <li><a href="products.html">Best Selling</a> <span>(15)</span></li>
          <li><a href="products.html">Man</a> <span>(16)</span></li>
          <ul>
            <li><a href="products.html">Accessories</a> <span>(2)</span></li>
            <li><a href="products.html">Coats & Jackets</a> <span>(5)</span></li>
            <li><a href="products.html">Jeans</a> <span>(1)</span></li>
            <li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
            <li><a href="products.html">Suits</a> <span>(1)</span></li>
            <li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
          </ul>
          <li><a href="products.html">Sales</a> <span>(15)</span></li>
          <li><a href="products.html">Woman</a> <span>(15)</span></li>
          <ul>
            <li><a href="products.html">Accessories</a> <span>(2)</span></li>
            <li><a href="products.html">New Arrivals</a> <span>(0)</span></li>
            <li><a href="products.html">Dresses</a> <span>(1)</span></li>
            <li><a href="products.html">Casual Shirts</a> <span>(0)</span></li>
            <li><a href="products.html">Shorts</a> <span>(4)</span></li>
          </ul>
        </ul>
      </div>
      <div class="new-products animated wow slideInUp" data-wow-delay=".5s">
        <h3>New Products</h3>
        <div class="new-products-grids">
          @foreach($list_produk as $produk)
          <div class="new-products-grid">
            <div class="new-products-grid-left">
              <a href="{{url('detailproduk')}}"><img src="{{url('public')}}/assets/images/6.jpg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="new-products-grid-right">
              <h4><a href="{{url('detailproduk')}}">{{$produk->nama}}</a></h4>
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                <p> <span class="item_price">Rp {{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <!-- <div class="new-products-grid">
            <div class="new-products-grid-left">
              <a href="{{url('detailproduk')}}"><img src="{{url('public')}}/assets/images/26.jpg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="new-products-grid-right">
              <h4><a href="{{url('detailproduk')}}">eum fugiat quo</a></h4>
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                <p> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
          <div class="new-products-grid">
            <div class="new-products-grid-left">
              <a href="{{url('detailproduk')}}"><img src="{{url('public')}}/assets/images/11.jpg" alt=" " class="img-responsive" /></a>
            </div>
            <div class="new-products-grid-right">
              <h4><a href="{{url('detailproduk')}}">officia deserunt</a></h4>
              <div class="rating">
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="rating-left">
                  <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                </div>
                <div class="clearfix"> </div>
              </div>
              <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                <p> <span class="item_price">$259</span><a class="item_add" href="#">add to cart </a></p>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div> -->
          @endforeach
        </div>
      </div>
      <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
        <a href="{{url('detailproduk')}}"><img src="{{url('public')}}/assets/images/27.jpg" alt=" " class="img-responsive" /></a>
        <div class="men-position-pos">
          <h4>Summer collection</h4>
          <h5><span>55%</span> Flat Discount</h5>
        </div>
      </div>
    </div>
    <div class="col-md-8 products-right">
      <div class="products-right-grid">
        <div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
          <div class="sorting">
            <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
              <option value="null">Default sorting</option>
              <option value="null">Sort by popularity</option>
              <option value="null">Sort by average rating</option>
              <option value="null">Sort by price</option>
            </select>
          </div>
          <div class="sorting-left">
            <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
              <option value="null">Item on page 9</option>
              <option value="null">Item on page 18</option>
              <option value="null">Item on page 32</option>
              <option value="null">All</option>
            </select>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
          <img src="{{url('public')}}/assets/images/jj.jpg" alt=" " class="img-responsive" />
          <div class="products-right-grids-position1">
            <h4>2021 New Collection</h4>
            <p>Semua koleksi yang tersedia di website ini merupakan koleksi terbaru dari kami yang khusus untuk anda.</p>
          </div>
        </div>
      </div>
      <div class="products-right-grids-bottom">
        <div class="col-md-4 products-right-grids-bottom-grid">
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            @foreach($list_produk as $produk)
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/19.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">{{$produk->nama}}</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$325</i> <span class="item_price">{{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
            </div>
            @endforeach
          </div>
          <!-- <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/21.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Casual Shoes</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$325</i> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div>
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/24.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Blazer</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$585</i> <span class="item_price">$489</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div> -->
        </div>
        <div class="col-md-4 products-right-grids-bottom-grid">
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            @foreach($list_produk as $produk)
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/7.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">{{$produk->nama}}</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$280</i> <span class="item_price">{{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
            </div>
            @endforeach
          </div>
          <!-- <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/22.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Casual Shoes</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$500</i> <span class="item_price">$480</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div>
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/25.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Blazer</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$585</i> <span class="item_price">$489</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div> -->
        </div>
        <div class="col-md-4 products-right-grids-bottom-grid">
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            @foreach($list_produk as $produk)
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/20.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">{{$produk->nama}}</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$305</i> <span class="item_price">{{$produk->harga}}</span><a class="item_add" href="#">add to cart </a></p>
            </div>
            @endforeach
          </div>
          <!-- <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/23.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Casual Shoes</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$389</i> <span class="item_price">$299</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div>
          <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
            <div class="new-collections-grid1-image">
              <a href="{{url('detailproduk')}}" class="product-image"><img src="{{url('public')}}/assets/images/26.jpg" alt=" " class="img-responsive"></a>
              <div class="new-collections-grid1-image-pos products-right-grids-pos">
                <a href="{{url('detailproduk')}}">Quick View</a>
              </div>
              <div class="new-collections-grid1-right products-right-grids-pos-right">
                <div class="rating">
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/2.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="rating-left">
                    <img src="{{url('public')}}/assets/images/1.png" alt=" " class="img-responsive">
                  </div>
                  <div class="clearfix"> </div>
                </div>
              </div>
            </div>
            <h4><a href="{{url('detailproduk')}}">Blazer</a></h4>
            <p>Vel illum qui dolorem.</p>
            <div class="simpleCart_shelfItem products-right-grid1-add-cart">
              <p><i>$585</i> <span class="item_price">$489</span><a class="item_add" href="#">add to cart </a></p>
            </div>
          </div> -->
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="ml-auto text-center">
        {!! $list_produk->links() !!}
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //breadcrumbs -->

@endsection