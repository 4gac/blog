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
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Kontakt</a>
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
					<h1 class="widget-title"><bold id="titleunderline">Kontakty<bold></h1>
					<br>
				</div>
			</div>
			<div class="row">
				@foreach($contacts as $contact)
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="widget subscribe no-box">
						<h5 class="widget-title"><strong>{{ $contact->meno_kontaktu }} {{ $contact->priezvisko_kontaktu }}</strong> <br> 
							@if($contact->typKontaktu_idtypKontaktu == "1")
							<p class="underline">Katedrový koordinátor</p>
							@endif
							@if($contact->typKontaktu_idtypKontaktu == "2")
							<p class="underline">Fakultný koordinátor</p>
							@endif<span></span>
						</h5>
						<h6>{{ $contact->email }}</h6>
						<h6 class="light" style="color: light blue">{{ $contact->tel_cislo }}</h6>
					</div>
				</div>
				@endforeach
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="widget no-box">
						<h5 class="widget-title"><strong>Sociálne siete</strong><span></span></h5>
						<ul>
							<li class="">
								<a href="#" class="fa fa-facebook"></a>
								<a href="#" class="fa fa-instagram"></a>
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
					<p>Copyright Company Name © 2019.</p>
				</div>
			</div>
		</div>
	</div>
</footer>

</body>

