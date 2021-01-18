@php
function checkRouteActive($route){
if(Route::current()-> uri == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-gray elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('beranda')}}" class="brand-link" style="padding-left:35px;">
    <img src="{{url('public')}}/assets/images/pp.jpg" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">N'D STORE</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('produk/create')}}" class="nav-link btn btn-outline-info {{checkRouteActive('artikel/create')}}">
            <i class="nav-icon fas fa-plus"></i>
            <p>
              Tambah Produk
            </p>
          </a>
        </li> <br>
        <li class="nav-item">
          <a href="{{url('home')}}" class="nav-link {{checkRouteActive('home')}}">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('produk')}}" class="nav-link {{checkRouteActive('produk')}}">
            <i class="nav-icon fa fa-book"></i>
            <p>
              Produk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('pembeli')}}" class="nav-link {{checkRouteActive('pembeli')}}">
            <i class="nav-icon far fa-comment"></i>
            <p>
              Pembeli
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}">
            <i class="nav-icon fa fa-user"></i>
            <p>
              User
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>