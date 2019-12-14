<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('description')">
    <title>@yield('title') Erasmus UKF</title>
    
    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('css/grid-gallery.css') }}" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
@yield('content')

<footer id="footer" class="footer-1" >
	<div class="main-footer widgets-dark typo-light">
		<div class="container">
			<div class="row">
				<div id="footertitle">
					<h1 class="widget-title"><strong id="titleunderline">Kontakty<strong></h1>
					<br>
				</div>
			</div>
			<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="widget subscribe no-box">
						<h5 class="widget-title"><strong>Tr. A. Hlinku 1<br>949 01 Nitra</strong><br> 
						</h5>
						<h6>Ing. Silvia Hrozenská, PhD.</h6>
						<h6>Ing. Katarína Butorová, PhD.</h6>
						<h6>Ing. Anita Garajová, PhD.</h6>
						<h6>Mgr. Pavol Vakoš</h6>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="widget no-box">
					<h5 class="widget-title"><strong>Úradné hodiny pre študentov</strong></h5>		
					<h6 class="">pondelok: 8.30 – 11.00 h <br></h6>
					<h6 class="">utorok: 9.30 – 12.00 h <br></h6>
					<h6 class="">streda: 8.30 – 11.00 h <br></h6>
					<h6 class="">štvrtok: 8.30 – 11.00 h <br></h6>
					<h6 class="">piatok: 8.30 – 13.00 h <br></h6>	
				</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="widget no-box">
						<h5 class="widget-title"><strong>Sociálne siete</strong></h5>
						<ul>
							<li class="">
								<h6><a href="https://www.facebook.com/UKFvNitre" ><i class="fa fa-facebook"></i></a></h6>								
							</li>
							<li>
								<h6><a href="https://www.instagram.com/ukfvnitre/?hl=sk"><i class="fa fa-instagram"></i></a></h6>	
							</li>				
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p>Copyright UKF © 2019.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>

