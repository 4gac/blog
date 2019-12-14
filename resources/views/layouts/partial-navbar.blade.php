@yield('nav')
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