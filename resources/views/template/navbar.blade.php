      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="navbar-brand-wrapper">
            <a class="navbar-brand brand-logo" href="/"><img src="../../images/LOGO-SD2.png" alt=""/></a>
            {{-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt=""/></a> --}}
          </div>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">{{ Auth::user()->name; }}</h4>
          {{-- <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
              </a>
            </li>
          </ul> --}}
          {{-- My Stylee --}}
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
            </li>
          </ul>
          @guest
          <ul class ="navbar-nav">
            <li class="nav-item">
              <a href="/login" class="btn btn-primary btn-sm">Login</a>
            </li>
          </ul>
          @endguest
          @auth
          <ul class ="navbar-nav">
            <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-light btn-sm">Logout</button>
              </form>
            </li>
          </ul>
          @endauth
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        {{-- <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div> --}}
      </nav>