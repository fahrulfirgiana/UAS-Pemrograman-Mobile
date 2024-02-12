{{-- <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"/></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo"/></a>
    </div>
    <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, {{ auth()->user()->displayName }}</h4>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item">
        <h4 class="mb-0 font-weight-bold d-none d-xl-block">
          {{ now()->format('M d, Y') }}
      </h4>      
      </li>
    </ul>
  </div>
</nav> --}}

<header id="header" class="header">
  <div class="top-left">
      <div class="navbar-header">
          <a class="navbar-brand" href="./"><img src="{{ asset('asset/images/dianlogo1.png') }}" alt="Logo"></a>
          <a class="navbar-brand hidden" href="./"><img src="{{ asset('asset/images/logo2.png') }}" alt="Logo"></a>
          <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
      </div>
  </div>
  <div class="top-right">
      <div class="header-menu">
          <div class="header-left">
              <button class="search-trigger"><i class="fa fa-search"></i></button>
              <div class="form-inline">
                  <form class="search-form">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                      <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                  </form>
              </div>

              <div class="dropdown for-notification">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-bell"></i>
                      <span class="count bg-danger">3</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="notification">
                      <p class="red">You have 3 Notification</p>
                      <a class="dropdown-item media" href="#">
                          <i class="fa fa-check"></i>
                          <p>Server #1 overloaded.</p>
                      </a>
                      <a class="dropdown-item media" href="#">
                          <i class="fa fa-info"></i>
                          <p>Server #2 overloaded.</p>
                      </a>
                      <a class="dropdown-item media" href="#">
                          <i class="fa fa-warning"></i>
                          <p>Server #3 overloaded.</p>
                      </a>
                  </div>
              </div>

              <div class="dropdown for-message">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-envelope"></i>
                      <span class="count bg-primary">4</span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="message">
                      <p class="red">You have 4 Mails</p>
                      <a class="dropdown-item media" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                          <div class="message media-body">
                              <span class="name float-left">Jonathan Smith</span>
                              <span class="time float-right">Just now</span>
                              <p>Hello, this is an example msg</p>
                          </div>
                      </a>
                      <a class="dropdown-item media" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                          <div class="message media-body">
                              <span class="name float-left">Jack Sanders</span>
                              <span class="time float-right">5 minutes ago</span>
                              <p>Lorem ipsum dolor sit amet, consectetur</p>
                          </div>
                      </a>
                      <a class="dropdown-item media" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                          <div class="message media-body">
                              <span class="name float-left">Cheryl Wheeler</span>
                              <span class="time float-right">10 minutes ago</span>
                              <p>Hello, this is an example msg</p>
                          </div>
                      </a>
                      <a class="dropdown-item media" href="#">
                          <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                          <div class="message media-body">
                              <span class="name float-left">Rachel Santos</span>
                              <span class="time float-right">15 minutes ago</span>
                              <p>Lorem ipsum dolor sit amet, consectetur</p>
                          </div>
                      </a>
                  </div>
              </div>
          </div>

          <div class="user-area dropdown float-right">
              <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="user-avatar rounded-circle" src="{{ asset('asset/images/man.png') }}" alt="User Avatar">
              </a>

              <div class="user-menu dropdown-menu">
                  <a class="nav-link" href="home/profile"><i class="fa fa- user"></i>My Profile</a>
                  <a class="nav-link" href="{{ route('user.logout') }}"><i class="fa fa-power -off"></i>Logout</a>
              </div>
          </div>

      </div>
  </div>
</header>