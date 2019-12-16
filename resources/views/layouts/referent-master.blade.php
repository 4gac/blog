<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Blank Page</title>


  <link href="{{ asset('vendor-referent/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor-referent/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

  <link href="{{ asset('css/image-picker.css') }}" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/grid-gallery.css') }}" rel="stylesheet">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{route('homepage') }}"> Referent {{Auth::user()->name}}</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->

      <ul class="form-inline ml-auto mr-1 mr-md-3 my-2 my-md-1">
  

          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
          </div>

    
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-graduation-cap"></i>
          <span>Študijné pobyty</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{route('referent-pobyty-crud/add-pobyt')}}">Pridať pobyt</a>
        <a class="dropdown-item" href="{{route('referent-pobyty-crud')}}">Všetky pobyty</a>
        
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-briefcase"></i>
          <span>Pracovné stáže</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{route('referent-staze-crud/add-staz')}}">Pridať stáž</a>
        <a class="dropdown-item" href="{{route('referent-staze-crud')}}">Všetky stáže</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-briefcase"></i>
          <span>Účastnícke správy</span>
        </a>
      
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{ url('referent-spravy-crud/add-spravu')}}">Pridať správu</a>
        <a class="dropdown-item" href="{{ url('referent-spravy-crud')}}">Všetky správy</a>
        </div>
      
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-question-circle"></i>
          <span>Na schválenie</span>
        </a>
      
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <a class="dropdown-item" href="{{ url('referent-hodnotenia-crud')}}">Všetky hodnotenia</a>
        <a class="dropdown-item" href="{{route('referent/zaujemcovia')}}">Záujemcovia</a>
        </div>
      
      </li>
    </ul>
    @yield('content')
      <!-- /.container-fluid -->

    

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 <script src="{{ asset('vendor-referent/jquery/jquery.min.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

 <script src="{{ asset('vendor-referent/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor-referent/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor-referent/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/sb-admin.min.js') }}"></script>
  <script src="{{asset('js/image-picker.js')}}"></script>
  <script src="{{asset('js/GalleryView.js')}}"></script>

</body>

</html>