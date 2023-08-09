@include('layout.header')
<body>
    <div id="app">
  
      <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          
            <div class="mr-auto"></div>

          
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Hi, Jawa</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="features-profile.html" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
          <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
              <a href="index.html">JAWA</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
              <a href="index.html">St</a>
            </div>
            
                      <ul class="sidebar-menu">
                        <li class="menu-header">Menu Utama</li>
                        <li>
                    <a class="nav-link" href="dashboard">
                        <i class="fas fa-home"></i> <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="peserta">
                            <i class="fas fa-user"></i> <span>Peserta Didik</span>
                            </a>
                        </li>

                        {{-- <!-- Menu Format -->
                <li class="menu-header">Menu Format</li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                  <ul class="dropdown-menu">
                    <a class="nav-link" href="index-0.html">General Dashboard</a></li>
                    <a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                  </ul>
                </li>
                <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li>
              </ul> --}}
  
              <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="{{url('logout')}}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
  
          </aside>
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
          <!-- Content Yield -->
          @Yield('content')
        </div>
        @include('layout.footer')