@yield('nav')
@if (Auth::check()) 
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
  <a class="navbar-brand mr-1" href="index.html"> Referent {{Auth::user()->name}}</a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->

    <ul class="form-inline ml-auto mr-1 mr-md-3 my-2 my-md-1">

      <li>
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href=""" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
  
  </ul>

</nav>

@endif
<nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                 
                    <a class="navbar-brand" href="{{route('homepage') }}">
                     
                        <img id="logo"src="{{asset('assets/images/logoukf.png')}}" class="img-responsive" />
                    </a>
                   
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active hlavneMenuItem">
                      <a class="nav-link" href="{{route('pobyty') }}">Študijné pobyty<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item hlavneMenuItem">
                      <a class="nav-link" href="{{route('staze') }}">Pracovné stáže</a>
                    </li>
                    <li class="nav-item hlavneMenuItem">
                      <a class="nav-link" href="{{route('spravy') }}" tabindex="-1" aria-disabled="true">Účastnícke správy</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{route('kontakt') }}" tabindex="-1" aria-disabled="true">Kontakt</a>
                    </li>
                
                  </ul>
                
                </div>
                
            </div>
            
        </nav>