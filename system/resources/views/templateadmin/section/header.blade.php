<div class="sticky-header header-section ">
  <div class="header-left">
    <!--toggle button start-->

    <!--toggle button end-->
    <!--logo -->
    <div class="logo">
      <a href="{{url('beranda')}}">
        <h1>FASHOLSHOP</h1>
        <span>Administrator</span>
      </a>
    </div>
    <!--//logo-->
    <!--search-box-->

    <!--//end-search-box-->
    <div class="clearfix"> </div>
  </div>
  <div class="header-right">
    <div class="profile_details_left">
      <!--notifications of menu start -->

      <div class="clearfix"> </div>
    </div>
    <!--notification menu end -->
    <div class="profile_details">
      <ul>
        <li class="dropdown profile_details_drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <div class="profile_img">
              <span class="prfil-img"><img src="{{url('public')}}/assets2/images/a.png" alt=""> </span>
              <div class="user-name">
                <p>
                  @if(Auth::check())
                  {{request()->user()->nama}}
                  @elseif(Auth::guard('penjual')->check())
                  {{Auth::guard('penjual')->user()->nama}}
                  @elseif(Auth::guard('pembeli')->check())
                  {{Auth::guard('pembeli')->user()->nama}}
                  @else
                  Silahkan Login
                  @endif
                </p>
              </div>
              <div class="clearfix"></div>
            </div>
            <span>
              <a href="{{url('setting')}}" style="padding-right:5px" class="btn btn-dark"><i class="fa fa-cog"></i> Settings</a>
              <a href="{{url('logout')}}" class="btn btn-dark"><i class="fa fa-sign-out"></i> Logout</a>
            </span>
          </a>
        </li>
      </ul>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>