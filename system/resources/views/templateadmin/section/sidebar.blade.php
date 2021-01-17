@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp

<div class=" sidebar" role="navigation">
  <div class="navbar-collapse">
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
      <ul class="nav" id="side-menu">
        <li>
          <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}"><i class="fa fa-home nav_icon"></i>Beranda</a>
        </li>
        <li>
          <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}"><i class="fa fa-cogs nav_icon"></i>Produk</a>
        </li>
        <li class="">
          <a href="{{url('kategori')}}" class="nav-link {{checkRouteActive('kategori')}}"><i class="fa fa-book nav_icon"></i>Kategori</a>
        </li>
        <li>
          <a href="{{url('promo')}}" class="nav-link {{checkRouteActive('promo')}}"><i class="fa fa-glass nav_icon"></i>Promo</a>
        </li>
        <li>
          <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}"><i class="fa fa-user nav_icon"></i>User</a>
        </li>
      </ul>
      <!-- //nav-second-level -->
      </li>
      </ul>
      <!-- //sidebar-collapse -->
    </nav>
  </div>
</div>