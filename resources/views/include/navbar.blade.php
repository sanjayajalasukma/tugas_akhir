<nav class="navbar navbar-expand-lg navbar-absolute fixed-top ">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        {{-- <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
            <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
            <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
          </button>
        </div> --}}
        <div class="row">
          <div class="col-md-12">
            <div class="marquee">
              <p>sistem pendaftaran kerja praktek</p>
            </div>
          </div>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form" method="get" action="{{ url('/cari-npm') }}">
          <div class="input-group no-border">
            <input type="text" value="" name="cari" class="form-control search" placeholder="Cari History KP NPM" style="color: #fff;">
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="fa fa-search"></i>
              <div class="ripple-container"></div>
            </button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff !important;">
              <img src="{{ asset('assets/img/user.jpg') }}" alt="" class="img-user"> Hallo, {{ Auth::User()->name }} <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  
                  <i class="fa fa-power-off" style="margin: 0 10px 0 0;"></i> Keluar
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
 
          </li>
        </ul>
      </div>
    </div>
  </nav>

