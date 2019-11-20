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
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                 
                    <a class="navbar-brand" href="{{route('homepage') }}">
                     
                        <img id="logo"src="logoukf.png" class="img-responsive" />
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

</body>