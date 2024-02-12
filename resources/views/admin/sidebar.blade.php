{{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item sidebar-category">
      <p>Navigation</p>
      <span></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('/home')}}">
        <i class="mdi mdi-view-quilt menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('view_category')}}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Kategori</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('showProduct')}}">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Produk</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('view_product')}}">
        <i class="mdi mdi-chart-pie menu-icon"></i>
        <span class="menu-title">Tambah Produk</span>
      </a>
    </li>
    <li class="nav-item sidebar-category">
      <p>Pages</p>
      <span></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="home/profile"> Profil </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('user.logout') }}"> Logout </a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav> --}}


<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
              <li class="active">
                  <a href="{{url('/home')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
              </li>
              <li class="menu-title">Pages</li><!-- /.menu-title -->
              <li>
                <a href="{{url('showProduct')}}"> <i class="menu-icon fa-solid fa-file-circle-plus"></i> Produk </a>
              </li>
              <li>
                <a href="{{url('view_category')}}"> <i class="menu-icon fa-solid fa-layer-group"></i>Kategori </a>
              </li>
              <li class="menu-title">User Pages</li><!-- /.menu-title -->
              <li class="menu-item-has-children dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa-solid fa-user"></i>Pages</a>
                  <ul class="sub-menu children dropdown-menu">
                      <li><i class="menu-icon fa-solid fa-user-gear"></i><a href="home/profile">Profil</a></li>
                      <li><i class="menu-icon fa fa-sign-in"></i><a href="{{ route('user.logout') }}">Logout</a></li>
                  </ul>
              </li>
          </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
</aside>